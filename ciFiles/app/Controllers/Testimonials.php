<?php

namespace App\Controllers;

use App\Models\Testimonial;


class Testimonials extends BaseController
{

    public function manage()
    {
        $this->auth();
        $testimonialModel = new Testimonial();

        $data = [
            "title" => "Manage Testimonial",
            "testimonials" => $testimonialModel->orderBy('id', 'desc')->findAll()
        
        ];

        echo view("templates/admin_header",$data);
        echo view("admin_pages/testimonials",$data);
        echo view("templates/admin_footer",$data);
    

    }

    function add(){
        $this->auth();

        $data = [
            "title" => "Add Testimonial"
        ];

        echo view("templates/admin_header",$data);
        echo view("admin_pages/create_testimonial",$data);
        echo view("templates/admin_footer",$data);
    }

    function create(){
        
        $this->auth();

        $testimonialModel = new Testimonial();

        $thumbail = $this->request->getFile('thumbnail');

        if (! $thumbail->hasMoved()&&$thumbail->isValid()) {
            $thumbailRandomName = $thumbail->getRandomName();

            $thumbail->move('assets/images/testimonials', $thumbailRandomName);

        }else {
            $thumbailRandomName="noimage.jpg";
        }

        $created = $testimonialModel->insert([
            "title"=> $this->request->getPost("title"),
            "text"=> $this->request->getPost("text"),
            "stars"=> $this->request->getPost("stars"),
            "youtube_video_link" => $this->request->getPost("youtube_video_link"),
            "thumbnail"=> $thumbailRandomName
        ]);

        if ($created) {
            return redirect()->to(site_url("create/testimonials?success_message=Testimonial created"));
        } else {
            return redirect()->to(site_url("create/testimonials?success_message=Testimonial not created"));
        }
        
        
    }

    public function delete()
    {
        
        $leadModel = new Testimonial();

        $leadId =  $this->request->getPost("testimonial_id");

        

        if ($leadModel->delete($leadId)) {
            return redirect()->to(site_url('manage/testimonials?success_message=Testimonial deleted'));
        }else{
            return redirect()->to(site_url('manage/testimonials?error_message=Testimonial not deleted'));
        }

    }

}