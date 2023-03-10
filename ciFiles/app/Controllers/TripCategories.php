<?php

namespace App\Controllers;
use App\Models\TripCategory;

class TripCategories extends BaseController
{


    public function manage()
    {
        
        $tripCategoryModel = new TripCategory();

        $data = [
            "title" => "Manage Trip Categories",
            'trip_categories' => $tripCategoryModel->paginate(10),
            'pager' => $tripCategoryModel->pager,
        ];

        $this->pageLoader->admin_page("trip_categories",$data);

    }

    public function edit($slug)
    {
        
        $tripCategoryModel = new TripCategory();

        $data = [
            "title" => "Edit Trip Categories",
            'trip_category' => $tripCategoryModel->where("slug",$slug)->first()
        ];

        $this->pageLoader->admin_page("edit_trip_category",$data);

    }

    public function add()
    {
        
        $data = [
            "title" => "Add new Trip Categories",
        ];

        $this->pageLoader->admin_page("create_trip_category",$data);

    }

    public function create()
    {

        $this->auth();

        $tripCategoryModel = new TripCategory();
        $slugCreated = strtolower(url_title($this->request->getPost("slug"),'-',TRUE));
        $slugUsed = $tripCategoryModel->where("slug",$slugCreated)->first();
        
        if ($slugUsed) {
            
            return redirect()->to(site_url("add/trip-category?error_message=Slug already exists"));
        
        } else {

            $featuredImage = $this->request->getFile('featured_image');

            if (! $featuredImage->hasMoved()&&$featuredImage->isValid()) {
                $featuredImageRandomName = $featuredImage->getRandomName();

                $featuredImage->move('assets/images/trip_categories', $featuredImageRandomName);

            }else {
                $featuredImageRandomName="noimage.jpg";
            }


            $bannerImage = $this->request->getFile('banner_image');

            if (! $bannerImage->hasMoved()&&$bannerImage->isValid()) {
                $bannerImageRandomName = $bannerImage->getRandomName();

                $bannerImage->move('assets/images/trip_categories', $bannerImageRandomName);

            }else {
                $bannerImageRandomName="noimage.jpg";
            }



            $saved = $tripCategoryModel->insert([
                "title" => $this->request->getPost("title"),
                "slug" => $slugCreated,
                "featured_image" => $featuredImageRandomName,
                "banner_image" => $bannerImageRandomName,
                "description" => $this->request->getPost("description")
            ]);

            if($saved){

                return redirect()->to(site_url("add/trip-category?success_message=Trip Category created"));

            }else{

                return redirect()->to(site_url("add/trip-category?error_message=Trip Category not created"));

            }
            
        }
        
    }



    public function delete()
    {
        $this->auth();

        $tcId = $this->request->getPost("tcid");

        $tripCategoryModel = new TripCategory();

        $tripCategory = $tripCategoryModel->find($tcId);

        $featuredImageUrl = "./assets/images/trip_categories/".$tripCategory["featured_image"];
        $bannerImageUrl = "./assets/images/trip_categories/".$tripCategory["banner_image"];

        if(is_file($featuredImageUrl)){
            unlink($featuredImageUrl);
        }

        if(is_file($bannerImageUrl)){
            unlink($bannerImageUrl);
        }

        $deleted = $tripCategoryModel->delete($tcId);

        if ($deleted) {
            return redirect()->to(site_url("manage/trip-categories?success_message=Trip Category deleted"));
        } else {
            return redirect(site_url("manage/trip-categories?error_message=Trip Category not deleted"));
        }
        

    }

    public function update(){
        
        $this->auth();

        $tripCategoryModel = new TripCategory();
        $slugCreated = strtolower(url_title($this->request->getPost("slug"),'-',TRUE));
        $slugUsed = $tripCategoryModel->where("slug",$slugCreated)->first();
        
        $currentTcData = $tripCategoryModel->find($this->request->getPost("tcid"));

        if ($slugUsed&&$slugCreated!=$currentTcData["slug"]) {
            
            return redirect()->to(site_url("edit/trip-category/".$currentTcData["slug"]."?error_message=Slug already exists"));
        
        } else {

            $featuredImage = $this->request->getFile('featured_image');

            if (! $featuredImage->hasMoved()&&$featuredImage->isValid()) {
                $featuredImageRandomName = $featuredImage->getRandomName();

                $featuredImage->move('assets/images/trip_categories', $featuredImageRandomName);


            }else {
                $featuredImageRandomName=$currentTcData["featured_image"];
            }


            $bannerImage = $this->request->getFile('banner_image');

            if (! $bannerImage->hasMoved()&&$bannerImage->isValid()) {
                $bannerImageRandomName = $bannerImage->getRandomName();

                $bannerImage->move('assets/images/trip_categories', $bannerImageRandomName);

            }else {
                $bannerImageRandomName=$currentTcData["banner_image"];
            }

            

            $updated = $tripCategoryModel->update($this->request->getPost("tcid"),[
                "title" => $this->request->getPost("title"),
                "slug" => $slugCreated,
                "featured_image" => $featuredImageRandomName,
                "banner_image" => $bannerImageRandomName,
                "description" => $this->request->getPost("description")
            ]);

            if($updated){

                return redirect()->to(site_url("edit/trip-category/".$slugCreated."?success_message=Trip Category updated"));

            }else{

                return redirect()->to(site_url("edit/trip-category/".$currentTcData["slug"]."?error_message=Trip Category not updated"));

            }
            
        }


    }

}
