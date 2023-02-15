<?php

namespace App\Controllers;

use App\Models\Trip;
use App\Models\Location;
use App\Models\TripCategory;

class PageLoader extends BaseController
{

    private function public_page_loader($view,$data){
        echo view("templates/header",$data);
        echo view("pages/".$view,$data);
        echo view("templates/footer",$data);
    }

    public function home()
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
        
        $this->public_page_loader("home",$data);
    }

    public function trip_category($slug)
    {

        $tripCategoryModel = new TripCategoryModel();

        $heroTripCategory = $tripCategoryModel->where("slug",$slug)->first();


        $tcTripsQuery = "SELECT GROUP_CONCAT(t.title SEPARATOR ',') as title, GROUP_CONCAT(t.slug SEPARATOR ',') as slug, GROUP_CONCAT(t.featured_image SEPARATOR ',') as featured_image, GROUP_CONCAT(t.duration SEPARATOR ',') as duration, GROUP_CONCAT(loc.title SEPARATOR ',') as location FROM trips t JOIN locations loc on t.location = loc.id WHERE t.id IN ".str_replace(']',')',str_replace('[','(',$heroTripCategory["trips"]));

        $db = \Config\Database::connect();

        $tripsForCategory = $db->query($tcTripsQuery)->getResultArray();

        $cache = \Config\Services::cache();
        $data = [
            "title" => $heroTripCategory["title"],
            "trips" => $tripsForCategory,
            "featured_trips" => $cache->get("featured_trips"),
            "trip_categories" => $cache->get("trip_categories"),
            "trip_category_hero" => $heroTripCategory
        ];
        
        $this->public_page_loader("trip_category",$data);
    
    }

    public function location($slug)
    {


        $locationModel = new LocationModel();

        $heroLocation = $locationModel->where("slug",$slug)->first();


        $locationTripsQuery = "SELECT GROUP_CONCAT(t.title SEPARATOR ',') as title, GROUP_CONCAT(t.slug SEPARATOR ',') as slug, GROUP_CONCAT(t.featured_image SEPARATOR ',') as featured_image, GROUP_CONCAT(t.duration SEPARATOR ',') as duration, GROUP_CONCAT(loc.title SEPARATOR ',') as location FROM trips t JOIN locations loc on t.location = loc.id WHERE t.location = loc.id";

        $db = \Config\Database::connect();

        $tripsForLocation = $db->query($locationTripsQuery)->getResult();

        foreach ($tripsForLocation as $tripForLocation) {
            if (count(explode(',',$tripForLocation->title))>1) {
                $tripTitles = explode(',',$tripForLocation->title);
                $tripSlugs = explode(',',$tripForLocation->slug);
                $tripFeaturedImages = explode(',',$tripForLocation->featured_image);
                $tripDurations = explode(',',$tripForLocation->duration);
                $tripLocations = explode(',',$tripForLocation->location);
                for ($i=0; $i < count($tripTitles); $i++) { 
                    $trip = [
                        "title" => $tripTitles[$i],
                        "slug" => $tripSlugs[$i],
                        "featured_image" => $tripFeaturedImages[$i],
                        "duration" => $tripDurations[$i],
                        "location" => $tripLocations[$i],
                    ];
                    $locationTripsObj[] = $trip;
                }
            } else {
                $locationTripsObj[] = $tripsForLocation;
            }
            
        }


        $cache = \Config\Services::cache();
        $data = [
            "title" => $heroLocation["title"],
            "trips" => $locationTripsObj,
            "featured_trips" => $cache->get("featured_trips"),
            "trip_categories" => $cache->get("trip_categories"),
            "location" => $heroLocation
        ];
        
        $this->public_page_loader("location",$data);
    
    }

    public function about()
    {
        $cache = \Config\Services::cache();

        $data = [
            "title" => "About TravelBuddy",
            "trip_categories" => $cache->get("trip_categories")
        ];
        $this->public_page_loader("about",$data);
    }

    public function trip($slug)
    {
        $cache = \Config\Services::cache();
        $tripModel = new Trip();   
        $heroTrip = $tripModel->where("slug",$slug)->first();

        $data = [
            "title" => $heroTrip["title"],
            "featured_trips" => $cache->get("featured_trips"),
            "focus_trip" => $heroTrip,
            "trip_categories" => $cache->get("trip_categories"),
            "testimonials" => $cache->get("testimonials")
        ];
        $this->public_page_loader("trip",$data);
    }

    public function contact()
    {
        $cache = \Config\Services::cache();
        $data = [
            "title" => "Contact",
            "trip_categories" => $cache->get("trip_categories")
        ];
        $this->public_page_loader("contact",$data);
    }

    public function search()
    {
        $search_query = $this->request->getPostGet("universal_search");
        
        $db = \Config\Database::connect();

        $cache = \Config\Services::cache();


        $query = "SELECT t.title,t.slug,t.featured_image,t.duration,loc.title as location FROM trips t JOIN locations loc ON t.location = loc.id WHERE (t.title LIKE '%".$search_query."%'
        OR t.slug LIKE '%".$search_query."%'
        OR t.description LIKE '%".$search_query."%')";

        $trips = $db->query($query)->getResult();



        $data = [
            "title" => "Search Results",
            "trip_categories" =>  $cache->get("trip_categories"),
            "trips" => $trips
        ];

        echo view("templates/header",$data);
        echo view("pages/search_results",$data);
        echo view("templates/footer",$data);

    }

    function all_trips(){

        $cache = \Config\Services::cache();
        
        $data = [
            "title" => "All Trips",
            "trip_categories" => $cache->get("trip_categories"),
            "trips" => $cache->get("trips")
        ];

        echo view("templates/header",$data);
        echo view("pages/all_trips",$data);
        echo view("templates/footer",$data);

        
    }

}
