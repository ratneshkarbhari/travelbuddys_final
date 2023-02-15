<?php namespace App\Models;

use CodeIgniter\Model;

class Testimonial extends Model
{

    protected $table = "testimonials";

    protected $primaryKey = 'id';

    protected $allowedFields = ['title','thumbnail','text','youtube_video_link','stars'];


}