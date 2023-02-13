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

                $featuredImage->move('assets/images/locations', $featuredImageRandomName);

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

                $thumbnailImage->move('assets/images/locations', $thumbnailImageRandomName);

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

}