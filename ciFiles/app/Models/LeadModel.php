<?php namespace App\Models;

use CodeIgniter\Model;

class LeadModel extends Model
{

    protected $table = "leads";

    protected $primaryKey = 'id';

    protected $allowedFields = ['name','phone','email','destination','date'];


}