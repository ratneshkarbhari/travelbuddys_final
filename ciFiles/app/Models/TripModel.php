<?php namespace App\Models;

use CodeIgniter\Model;

class TripModel extends Model
{

    protected $table = "trips";

    protected $primaryKey = 'id';

    protected $allowedFields = ['title','slug','featured_image','banner_image','description','gallery_images','youtube_videos','duration','itinerary','hotel_info','location','brochure','pickup_city','drop_city','price','sale_price','featured','dates','inclusion','exclusion'];


}