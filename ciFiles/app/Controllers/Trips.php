<?php

namespace App\Controllers;
use App\Models\Trip;
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
        $tripCategoryModel = new Trip();

        $data = [
            "title" => "Add Trip",
            'trips' => $tripCategoryModel->findAll(),
        ];

        $this->pageLoader->admin_page("create_trip",$data);

    }
}
