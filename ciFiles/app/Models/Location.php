<?php namespace App\Models;

use CodeIgniter\Model;

class Location extends Model
{

    protected $table = "locations";

    protected $primaryKey = 'id';

    protected $allowedFields = ['title','slug','featured_image','banner_image','description','thumbnail'];


}