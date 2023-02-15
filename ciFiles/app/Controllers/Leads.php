<?php

namespace App\Controllers;

require "./vendor/autoload.php";

use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\PHPMailer;


use App\Models\LeadModel;

class Leads extends BaseController
{

    public function lead_created()
    {
        echo view("pages/lead_created");
    }

    public function lead_not_created()
    {
        echo view("pages/lead_not_created");
    }

    public function send_contact_email()
    {
        $fullName = $this->request->getPost("full_name");
        $emailOfLead = $this->request->getPost("email");
        $message = $this->request->getPost("message");


        $mail = new PHPMailer(true);

        try {
            //Server settings
            $mail->SMTPDebug = 0;                      //Enable verbose debug output
            $mail->isSMTP();                                            //Send using SMTP
            $mail->Host       = 'mail.travelbuddys.in';                     //Set the SMTP server to send through
            $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
            $mail->Username   = 'hello@travelbuddys.in';                     //SMTP username
            $mail->Password   = 'Travelbuddy@22';                               //SMTP password
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
            $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

            //Recipients
            $mail->setFrom('hello@travelbuddy.in', 'Hello Service');
            $mail->addAddress('travelbuddys.web@gmail.com', 'TravelBuddys');     //Add a recipient

            //Attachments
            //Content
            $mail->isHTML(true);                                  //Set email format to HTML
            $mail->Subject = 'New enquiry from contact form';
            $mail->Body    = '
            Name: '.$fullName.'<br>
            Email: '.$emailOfLead.'<br>
            Message: '.$message.'<br>
            ';
            $mail->AltBody = '
            Name: '.$fullName.'<br>
            Email: '.$emailOfLead.'<br>
            Message: '.$message.'<br>
            ';

            if ($mail->send()) {
                $this->lead_created();
            } else {
                $this->lead_not_created();
            }
            
        } catch (Exception $e) {
            echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
        }

    }

    public function create_lead(){

        $leadModel = new LeadModel();

        $name = $this->request->getPost("name");
        $phone = $this->request->getPost("phone");
        $destination = $this->request->getPost("destination");
        $email = $this->request->getPost("email");
        $date = $this->request->getPost("date");

        if ($leadModel->where("phone",$phone)->first()) {

            $this->lead_not_created();
            
        } else {

            if ($leadModel->save([
                "name" => $name,
                "phone" => $phone,
                "destination" => $destination,
                "email" => $email,
                "date" => $date
            ])) {
                $this->lead_created();
                exit;
            } else {
                $this->lead_not_created();
                exit;
            }
            
            
        }       

    }

}