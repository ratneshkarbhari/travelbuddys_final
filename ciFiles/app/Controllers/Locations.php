<?php

namespace App\Controllers;
use App\Models\Location;

class Locations extends BaseController
{

    function manage(){
        $this->auth();
        $locationModel = new Location();
        $data = [
            "title" => "Manage Locations",
            'locations' => $locationModel->paginate(10),
            'pager' => $locationModel->pager,
        ];

        $this->pageLoader->admin_page("locations",$data);
    }

    function add(){
        $this->auth();
        $locationModel = new Location();
        $data = [
            "title" => "Add Location",
            'locations' => $locationModel->paginate(10),
            'pager' => $locationModel->pager,
        ];

        $this->pageLoader->admin_page("create_location",$data);
    }


    function create(){
        $this->auth();
        $locationModel = new Location();
        $slugCreated = strtolower(url_title($this->request->getPost("slug"),'-',TRUE));
        $slugUsed = $locationModel->where("slug",$slugCreated)->first();
        
        if ($slugUsed) {
            
            return redirect()->to(site_url("add/locations?error_message=Slug already exists"));
        
        } else {

            $featuredImage = $this->request->getFile('featured_image');

            if (! $featuredImage->hasMoved()&&$featuredImage->isValid()) {
                $featuredImageRandomName = $featuredImage->getRandomName();

                \Config\Services::image()
                ->withFile($featuredImage)
                ->resize(385.5, 307.5, true, 'height')
                ->save('./assets/images/locations/'. $featuredImageRandomName);

                // $featuredImage->move('assets/images/locations', $featuredImageRandomName);

            }else {
                $featuredImageRandomName="noimage.jpg";
            }


            $bannerImage = $this->request->getFile('banner_image');

            if (! $bannerImage->hasMoved()&&$bannerImage->isValid()) {
                $bannerImageRandomName = $bannerImage->getRandomName();

                $bannerImage->move('assets/images/locations', $bannerImageRandomName);

            }else {
                $bannerImageRandomName="noimage.jpg";
            }


            $thumbnailImage = $this->request->getFile('thumbnail_image');

            if (! $thumbnailImage->hasMoved()&&$thumbnailImage->isValid()) {
                $thumbnailImageRandomName = $thumbnailImage->getRandomName();

                \Config\Services::image()
                ->withFile($thumbnailImage)
                ->resize(385.5, 307.5, true, 'height')
                ->save('./assets/images/locations/'. $thumbnailImageRandomName);

            }else {
                $thumbnailImageRandomName="noimage.jpg";
            }



            $saved = $locationModel->insert([
                "title" => $this->request->getPost("title"),
                "slug" => $slugCreated,
                "featured_image" => $featuredImageRandomName,
                "banner_image" => $bannerImageRandomName,
                "thumbnail" => $thumbnailImageRandomName,
                "description" => $this->request->getPost("description")
            ]);

            if($saved){

                return redirect()->to(site_url("add/locations?success_message=Location created"));

            }else{

                return redirect()->to(site_url("add/locations?error_message=Location not created"));

            }
            
        }
    }

    function edit($slug){
        $this->auth();
        $locationModel = new Location();
        $data = [
            "title" => "Edit Location",
            'location' => $locationModel->where("slug",$slug)->first()
        ];

        $this->pageLoader->admin_page("edit_location",$data);

    }

    function update(){
        $this->auth();
        $locationModel = new Location();
        $slugCreated = strtolower(url_title($this->request->getPost("slug"),'-',TRUE));
        $slugUsed = $locationModel->where("slug",$slugCreated)->first();
        
        $prevLocationData = $locationModel->find($this->request->getPost("location_id"));

        if ($slugUsed&&($slugCreated!=$prevLocationData["slug"])) {

            return redirect()->to(site_url("edit/location/".$prevLocationData["slug"]."?error_message=Slug already exists"));
        
        } else {

            $featuredImage = $this->request->getFile('featured_image');

            if (! $featuredImage->hasMoved()&&$featuredImage->isValid()) {
                $featuredImageRandomName = $featuredImage->getRandomName();


                \Config\Services::image()
                ->withFile($featuredImage)
                ->resize(385.5, 307.5, true, 'height')
                ->save('./assets/images/locations/'. $featuredImageRandomName);

            }else {
                $featuredImageRandomName=$prevLocationData["featured_image"];
            }


            $bannerImage = $this->request->getFile('banner_image');

            if (! $bannerImage->hasMoved()&&$bannerImage->isValid()) {
                $bannerImageRandomName = $bannerImage->getRandomName();

                $bannerImage->move('assets/images/locations/', $bannerImageRandomName);

            }else {
                $bannerImageRandomName=$prevLocationData["banner_image"];
            }


            $thumbnailImage = $this->request->getFile('thumbnail_image');

            if (! $thumbnailImage->hasMoved()&&$thumbnailImage->isValid()) {
                echo $thumbnailImageRandomName = $thumbnailImage->getRandomName();


                \Config\Services::image()
                ->withFile($thumbnailImage)
                ->resize(385.5, 307.5, true, 'height')
                ->save('./assets/images/locations/'. $thumbnailImageRandomName);

            }else {
                $thumbnailImageRandomName=$prevLocationData["thumbnail"];
            }



            $updated = $locationModel->update($this->request->getPost("location_id"),[
                "title" => $this->request->getPost("title"),
                "slug" => $slugCreated,
                "featured_image" => $featuredImageRandomName,
                "banner_image" => $bannerImageRandomName,
                "thumbnail" => $thumbnailImageRandomName,
                "description" => $this->request->getPost("description")
            ]);


            if($updated){

                return redirect()->to(site_url("edit/location/".$slugCreated."?success_message=Location created"));

            }else{

                return redirect()->to(site_url("edit/location/".$prevLocationData["slug"]."?error_message=Location not created"));

            }
            
        }
    }

    function delete(){
        $this->auth();
        $locationModel = new Location();
        $location = $locationModel->find($this->request->getPost("location_id"));
        $assetUrls = [];
        $assetUrls[] = "./assets/images/locations/".$location["featured_image"];
        $assetUrls[] = "./assets/images/locations/".$location["banner_image"];
        $assetUrls[] = "./assets/images/locations/".$location["thumbnail"];
        if($locationModel->delete($this->request->getPost("location_id"))){
            foreach($assetUrls as $assetUrl){
                if(is_file($assetUrl)){
                    unlink($assetUrl);
                }
            }
            return(redirect()->to(site_url("manage/locations?success_message=Location deleted successfully")));
        }else{
            return(redirect()->to(site_url("manage/locations?error_message=Location not deleted")));
        }
    }

}