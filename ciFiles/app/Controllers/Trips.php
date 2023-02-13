<?php

namespace App\Controllers;
use App\Libraries\PageLoader;

class Trips extends BaseController
{

    protected $pageLoader;
    protected $cache;

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
}
