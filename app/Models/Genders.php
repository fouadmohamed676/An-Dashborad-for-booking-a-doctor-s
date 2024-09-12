<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Genders extends Model
{

    use HasFactory;
    
    protected $table="genders";
    		 	
    protected $fillable=['id','name','is_deleted','created_at','updated_at'];
    protected $hidden=['is_deleted','created_at','updated_at'];
    public $timestamps=true;

}
