<?php

namespace App\Controllers;
use App\Models\Trip;
use App\Libraries\PageLoader;
use App\Models\Location;
use App\Models\TripCategory;

class Trips extends BaseController
{

    protected $pageLoader;

    public function __construct() {
        $this->pageLoader = new PageLoader();
    }

    public function index()
    {

        $cache = \Config\Services::cache();
        $data = [
            "title" => "Buddy Who Never Ditch Plans ",
            "tcTripsObj" => $cache->get("tcTripsObj"),
            "featured_trips" => $cache->get("featured_trips"),
            "testimonials" => $cache->get("testimonials"),
            "locations" => $cache->get("locations"),
            "trips" => $cache->get("trips"),
            "trip_categories" => $cache->get("trip_categories")
        ];
        
        $this->pageLoader->public_page("home",$data);

    }

    public function manage()
    {

        $this->auth();
        helper("form");
        
        $tripModel = new Trip();

        $data = [
            "title" => "Manage Trips",
            'trips' => $tripModel->paginate(10),
            'pager' => $tripModel->pager,
        ];

        $this->pageLoader->admin_page("trips",$data);

    }
    
    function add(){
        $this->auth();
        helper("form");
        $tripCategoryModel = new TripCategory();
        $locationModel = new Location();

        $data = [
            "title" => "Add Trip",
            'trip_categories' => $tripCategoryModel->findAll(),
            'locations' => $locationModel->findAll()
        ];

        $this->pageLoader->admin_page("create_trip",$data);

    }

    function create(){
        
        $this->auth();
        $tripModel = new Trip();
        
        $title = $this->request->getPost('title');
        
        $slugEntered = $this->request->getPost('slug');
        
        if ($slugEntered=='') {
            $slug = strtolower(url_title($title,'-',TRUE));
        } else {
            $slug = strtolower(url_title($slugEntered,'-',TRUE));
        }
        
        $tripExists = $tripModel->where('slug',$slug)->first();

        if ($tripExists) {
            
            return redirect()->to(site_url("add/trips?error_message=Trip already exists"));
            
        } else {

            // HANDLING FILE UPLOADS
            $featuredImage = $this->request->getFile('featured_image');

            if (! $featuredImage->hasMoved()&&$featuredImage->isValid()) {
                $featuredImageRandomName = $featuredImage->getRandomName();

                \Config\Services::image()
                ->withFile($featuredImage)
                ->resize(385.5, 307.5, true, 'height')
                ->save('./assets/images/trips/'. $featuredImageRandomName);

                // $featuredImage->move('assets/images/trips', $featuredImageRandomName);

            }else {
                $featuredImageRandomName="noimage.jpg";
            }

            $bannerImage = $this->request->getFile('banner_image');

            if (! $bannerImage->hasMoved()&&$bannerImage->isValid()) {
                $bannerImageRandomName = $bannerImage->getRandomName();

                $bannerImage->move('assets/images/trips', $bannerImageRandomName);

            }else {
                $bannerImageRandomName="noimage.jpg";
            }

            $bannerImageTouch = $this->request->getFile('banner_image_touch');

            if (! $bannerImageTouch->hasMoved()&&$bannerImageTouch->isValid()) {
                $bannerImageTouchRandomName = $bannerImageTouch->getRandomName();

                $bannerImageTouch->move('assets/images/trips', $bannerImageTouchRandomName);

            }else {
                $bannerImageTouchRandomName="noimage.jpg";
            }

            $brochure = $this->request->getFile('brochure');

            if (! $brochure->hasMoved()&&$brochure->isValid()) {
                $brochureRandomName = $brochure->getRandomName();

                $brochure->move('assets/brochures/', $brochureRandomName);

            }else {
                $brochureRandomName="#";
            }

            $galleryImages = $this->request->getFilemULTIPLE('gallery_images');

            $galleryImageNames = '';

			foreach ($galleryImages as $galleryImage) {

				$galleryImageRandomName = $galleryImage->getRandomName();

				$galleryImage->move('assets/images/trips', $galleryImageRandomName);

				if($galleryImageNames==''){
					$galleryImageNames.=$galleryImageRandomName;
				}else{
					$galleryImageNames.=','.$galleryImageRandomName;
				}

			}

            if($this->request->getPost("featured")=="on"){
                $featured = "Yes";
            }else{
                $featured = "No";
            }

            $tripObj = [
                "title" => $this->request->getPost("title"),
                "slug" => $slug,
                "featured" => $featured,
                "description" => $this->request->getPost("description"),
                "price" => $this->request->getPost("price"),
                "sale_price" => $this->request->getPost("sale_price"),
                "dates" => $this->request->getPost("dates"),
                "youtube_videos" => $this->request->getPost("youtube_videos"),
                "inclusion" => $this->request->getPost("inclusion"),
                "exclusion" => $this->request->getPost("exclusion"),
                "dates" => $this->request->getPost("dates"),
                "hotel_info" => $this->request->getPost("hotel_info"),
                "location" => $this->request->getPost("location"),
                "pickup_city" => $this->request->getPost("pickup_city"),
                "drop_city" => $this->request->getPost("drop_city"),
                "featured_image" => $featuredImageRandomName,
                "banner_image" => $bannerImageRandomName,
                "banner_image_touch" => $bannerImageTouchRandomName,
                "gallery_images" => $galleryImageNames,
                "brochure" => $brochureRandomName,
                "itinerary" => $this->request->getPost("itinerary"),
                "duration" => $this->request->getPost("duration")
            ];

            $created = $tripModel->insert($tripObj);
            $tripId = $tripModel->getInsertID();

            if($created){
                $tcModel = new TripCategory();

                $tripCategories = $tcModel->find($this->request->getPost("trip_categories"));

                foreach ($tripCategories as $trip_category) {
                    $jsondecoedRes = json_decode($trip_category["trips"],TRUE);
                    if (is_array($jsondecoedRes)) {
                        $jsondecoedRes[] = $tripId;
                    } else {
                        $jsondecoedRes = [];
                        $jsondecoedRes[] = $tripId;
                    }
                    $jsondecoedRes = array_unique($jsondecoedRes);
                    $tripsJson = json_encode($jsondecoedRes);
                    $tcModel->update(
                        $trip_category["id"],
                        ["trips"=>$tripsJson]
                    );
                }
            }

            if ($created) {
                return redirect()->to(site_url("add/trips?success_message=Trip Created successfully"));
            } else {
                return redirect()->to(site_url("add/trips?error_message=Trip not created"));
            }
            
        }
    }

    public function edit($slug)
    {
        helper("form");
        $tripModel = new Trip();
        $tcModel = new TripCategory();
        $locationModel = new Location();
        $data = [
            "title" => "Edit Trip Categories",
            'trip' => $tripModel->where("slug",$slug)->first(),
            "trip_categories" => $tcModel->findAll(),
            "locations" => $locationModel->findAll()
        ];

        $this->pageLoader->admin_page("edit_trip",$data);

    }

    function update(){
        
        $this->auth();
        $tripModel = new Trip();

        $previousTripData = $tripModel->find($this->request->getPost("tripId"));
        
        $title = $this->request->getPost('title');
        
        $slugEntered = $this->request->getPost('slug');
        
        if ($slugEntered=='') {
            $slug = strtolower(url_title($title,'-',TRUE));
        } else {
            $slug = strtolower(url_title($slugEntered,'-',TRUE));
        }
        
        $tripExists = $tripModel->where('slug',$slug)->first();

        if ($tripExists&&($previousTripData["slug"]!=$slug)) {
            
            return redirect()->to(site_url("add/trips?error_message=Trip already exists"));
            
        } else {

            // HANDLING FILE UPLOADS
            $featuredImage = $this->request->getFile('featured_image');

            if (! $featuredImage->hasMoved()&&$featuredImage->isValid()) {
                $featuredImageRandomName = $featuredImage->getRandomName();

                \Config\Services::image()
                ->withFile($featuredImage)
                ->resize(385.5, 307.5, true, 'height')
                ->save('./assets/images/trips/'. $featuredImageRandomName);


                // $featuredImage->move('assets/images/trips', $featuredImageRandomName);

            }else {
                $featuredImageRandomName=$previousTripData["featured_image"];
            }

            $bannerImage = $this->request->getFile('banner_image');

            if (! $bannerImage->hasMoved()&&$bannerImage->isValid()) {
                $bannerImageRandomName = $bannerImage->getRandomName();

                $bannerImage->move('assets/images/trips', $bannerImageRandomName);

            }else {
                $bannerImageRandomName=$previousTripData["banner_image"];
            }

            $bannerImageTouch = $this->request->getFile('banner_image_touch');

            if (! $bannerImageTouch->hasMoved()&&$bannerImageTouch->isValid()) {
                $bannerImageTouchRandomName = $bannerImageTouch->getRandomName();

                $bannerImageTouch->move('assets/images/trips', $bannerImageTouchRandomName);

            }else {
                $bannerImageTouchRandomName=$previousTripData["banner_image_touch"];
            }

            $brochure = $this->request->getFile('brochure');

            if (! $brochure->hasMoved()&&$brochure->isValid()) {
                $brochureRandomName = $brochure->getRandomName();

                $brochure->move('assets/brochures/', $brochureRandomName);

            }else {
                $brochureRandomName=$previousTripData["brochure"];
            }

            $galleryImageNames = $previousTripData["gallery_images"];

            if ($this->request->getFilemULTIPLE('gallery_images')) {

                foreach ($this->request->getFilemULTIPLE('gallery_images') as $galleryImage) {

                    if ($galleryImage->isValid() && ! $galleryImage->hasMoved()){
                        $galleryImageRandomName = $galleryImage->getRandomName();
    
                        $galleryImage->move('assets/images/trips', $galleryImageRandomName);
        
                        if($galleryImageNames==''){
                            $galleryImageNames.=$galleryImageRandomName;
                        }else{
                            $galleryImageNames.=','.$galleryImageRandomName;
                        }
                    }
    
                }
                
            } else {
                $galleryImageNames = $previousTripData["gallery_images"];
            }
            



            if($this->request->getPost("featured")=="on"){
                $featured = "Yes";
            }else{
                $featured = "No";
            }

            $tripObj = [
                "title" => $this->request->getPost("title"),
                "slug" => $slug,
                "featured" => $featured,
                "description" => $this->request->getPost("description"),
                "price" => $this->request->getPost("price"),
                "sale_price" => $this->request->getPost("sale_price"),
                "dates" => $this->request->getPost("dates"),
                "youtube_videos" => $this->request->getPost("youtube_videos"),
                "inclusion" => $this->request->getPost("inclusion"),
                "exclusion" => $this->request->getPost("exclusion"),
                "dates" => $this->request->getPost("dates"),
                "hotel_info" => $this->request->getPost("hotel_info"),
                "location" => $this->request->getPost("location"),
                "pickup_city" => $this->request->getPost("pickup_city"),
                "drop_city" => $this->request->getPost("drop_city"),
                "featured_image" => $featuredImageRandomName,
                "banner_image" => $bannerImageRandomName,
                "banner_image_touch" => $bannerImageTouchRandomName,
                "gallery_images" => $galleryImageNames,
                "brochure" => $brochureRandomName,
                "itinerary" => $this->request->getPost("itinerary"),
                "duration" => $this->request->getPost("duration")
            ];

            $created = $tripModel->update($this->request->getPost("tripId"),$tripObj);
            
            if($created){
                $tcModel = new TripCategory();

                $allTc = $tcModel->findAll();

                foreach($allTc as $tc){

                    $trips = json_decode($tc["trips"],TRUE);
                    
                    $tripKey = array_search($this->request->getPost("tripId"),$trips);
                    
                    unset($trips[$tripKey]);

                    $trips = array_values($trips);

                    $tc["trips"] = json_encode($trips);
                    $tcModel->update($tc["id"],$tc);
                }

                $tripCategories = $tcModel->find($this->request->getPost("trip_categories"));


                foreach ($tripCategories as $trip_category) {

                    

                        $jsondecoedRes = json_decode($trip_category["trips"],TRUE);
                        if (is_array($jsondecoedRes)) {
                            $jsondecoedRes[] = $previousTripData["id"];
                        } else {
                            $jsondecoedRes = [];
                            $jsondecoedRes[] = $previousTripData["id"];
                        }
                        $jsondecoedRes = array_unique($jsondecoedRes);
                        echo $tripsJson = json_encode($jsondecoedRes);
                        $tcModel->update(
                            $trip_category["id"],
                        ["trips"=>$tripsJson]
                    );
                }


            }
            if ($created) {
                return redirect()->to(site_url("edit/trip/".$slug."?success_message=Trip updated successfully"));
            } else {
                return redirect()->to(site_url("edit/trip/".$previousTripData["slug"]."?error_message=Trip not updated"));
            }
            
        }
    }

    function delete(){
        $this->auth();
        $tripID = $this->request->getPost("trip_id");
        $tripModel = new Trip();
        $tcModel = new TripCategory();
        if ($tripModel->delete($tripID)) {
            foreach($tcModel->findAll() as $trip_category){
                $tripsArray = json_decode($trip_category["trips"],TRUE);
                if(in_array($tripID,$tripsArray)){
                    $key = array_search($tripID,$tripsArray);
                    unset($tripsArray[$key]);
                    $tripsJson = json_encode($tripsArray);
                    $tcModel->update($trip_category["id"],["trips"=>$tripsJson]);
                }
                $key = "";
            }

            return redirect()->to(site_url("manage/trips/?success_message=Trip deleted"));
        } else {
            return redirect()->to(site_url("manage/trips/?success_message=Trip not deleted"));
        }
    }

}
