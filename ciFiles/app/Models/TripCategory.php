<?php namespace App\Models;

use CodeIgniter\Model;

class TripCategory extends Model
{

    protected $table = "trip_categories";

    protected $primaryKey = 'id';

    protected $allowedFields = ['title','slug','featured_image','banner_image','trips'];


}