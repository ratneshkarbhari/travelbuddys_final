<?php

namespace App\Controllers;
use App\Models\User;

class Users extends BaseController
{


    public function login()
    {

        $data = [
            "title" => "Login",
        ];
        
        echo view("login",$data);

    }

    public function authenticate()
    {
        
        $email = $this->request->getPost("email");
        $enteredPassword = $this->request->getPost("password");

        $userModel = new User();

        $user = $userModel->where("email",$email)->first();
        
        if ($user) {

            if (password_verify($enteredPassword,$user["password"])) {
            
                $this->session->set([
                    "first_name" => $user["first_name"],
                    "last_name" => $user["last_name"],
                    "email" => $user["email"]
                ]);

                return redirect()->to(site_url("dashboard"));
                
            } else {
                return redirect()->to(site_url("login?error=Password is incorrect"));
            }
            
            
        } else {
            return redirect()->to(site_url("login?error=Email is incorrect"));
        }
        
    }

    public function dashboard()
    {
        
        $this->pageLoader->admin_page("dashboard",[
            "title" => "Admin Dashboard"
        ]);

    }

}
