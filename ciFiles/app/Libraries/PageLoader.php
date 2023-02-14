<?php

    namespace App\Libraries;

    class PageLoader {
        
        public function public_page($view,$data){

            echo view("templates/header",$data);
            echo view("pages/".$view,$data);
            echo view("templates/footer",$data);
        }

        public function admin_page($view,$data){
            $session = session();
            $fname = $session->get("first_name");
            if (!isset($fname)) {
                return redirect()->to(site_url("login?error=You are not logged in"));
            }
            echo view("templates/admin_header",$data);
            echo view("admin_pages/".$view,$data);
            echo view("templates/admin_footer",$data);
        }

    }
    