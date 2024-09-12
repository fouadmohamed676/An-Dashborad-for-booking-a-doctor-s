<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Banner extends Model
{
    use HasFactory;
    protected $table="banners";
    		 	
    protected $fillable=['id','title','date','is_deleted','created_at','updated_at'];
    protected $hidden=['is_deleted','created_at','updated_at'];
    public $timestamps=true;
}
