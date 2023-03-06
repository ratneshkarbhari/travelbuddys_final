<?php

namespace App\Controllers;

use App\Models\TripCategory;

class CacheController extends BaseController
{

    public function rebuild(){

       
        $db = \Config\Database::connect();

        $featured_trips = $db->query("SELECT t.title,t.slug,t.featured_image,t.duration,loc.title as location, t.price, t.sale_price FROM trips t JOIN locations loc on t.location = loc.id WHERE t.featured='Yes'")->getResult();


        $cache = \Config\Services::cache();

        $cache->save('featured_trips',$featured_trips,3600*24*365);


        $trips = $db->query("SELECT t.title,t.slug,t.featured_image,t.duration,loc.title as location,t.sale_price FROM trips t JOIN locations loc on t.location = loc.id")->getResult();


        $cache->save('trips',$trips,3600*24*365);

        $tcModel = new TripCategory();

        $allTripCategories = $tcModel->findAll();
        $cache->save('trip_categories',$allTripCategories,3600*24*365);


        $tcTripsObj = [];

        foreach ($allTripCategories as $tripCategory) {

            if($tripCategory["trips"]!=""){

                $query = "SELECT GROUP_CONCAT(t.title SEPARATOR ',') as title, GROUP_CONCAT(t.slug SEPARATOR ',') as slug, GROUP_CONCAT(t.featured_image SEPARATOR ',') as featured_image, GROUP_CONCAT(t.duration SEPARATOR ',') as duration, GROUP_CONCAT(loc.title SEPARATOR ',') as location, GROUP_CONCAT(t.price SEPARATOR ',') as price, GROUP_CONCAT(t.sale_price SEPARATOR ',') as sale_price  FROM trips t RIGHT JOIN locations loc on t.location = loc.id WHERE t.id IN (".str_replace(array("[","]"),array("",""),$tripCategory["trips"]).")";
                
                $tripsForCategory = $db->query($query)->getResult();



                foreach ($tripsForCategory as $tripForCategory) {
                    // if (count(explode(',',$tripForCategory->title))>1) {
                        $tripTitles = explode(',',$tripForCategory->title);
                        $tripSlugs = explode(',',$tripForCategory->slug);
                        $tripFeaturedImages = explode(',',$tripForCategory->featured_image);
                        $tripDurations = explode(',',$tripForCategory->duration);
                        $tripLocations = explode(',',$tripForCategory->location);
                        $tripPrices = explode(',',$tripForCategory->price);
                        $tripSalePrices = explode(',',$tripForCategory->sale_price);
                        for ($i=0; $i < count($tripTitles); $i++) { 
                            $trip = [
                                "title" => $tripTitles[$i],
                                "slug" => $tripSlugs[$i],
                                "featured_image" => $tripFeaturedImages[$i],
                                "duration" => $tripDurations[$i],
                                "location" => $tripLocations[$i],
                                "price" => $tripPrices[$i],
                                "sale_price" => $tripSalePrices[$i]
                            ];
                            if($trip["slug"]!=""){
                                $tcTripsObj[$tripCategory["id"]][] = $trip;
                            }
                        }
                    // } 
                    // else {
                    //     $tcTripsObj[$tripCategory["id"]][] = $tripsForCategory;
                    // }
                    
                }
                // $tcTripsObj[$tripCategory["id"]] = $tripsForCategory;
            
            }
        }


        $cache->save('tcTripsObj',$tcTripsObj,3600*24*365);


        $testimonials = $db->query("SELECT * FROM testimonials")->getResult();

        $cache->save('testimonials',$testimonials,3600*24*365);

        $locations = $db->query("SELECT * FROM locations")->getResult();

        $cache->save('locations',$locations,3600*24*365);

        return redirect()->to(PUBLIC_URL);


    }



}
