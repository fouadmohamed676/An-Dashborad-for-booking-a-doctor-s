<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
    use HasFactory;
    protected $table="patients";
    		
    protected $fillable=['id','name','phone','password','title','email','barth_date','is_deleted','created_at','updated_at'];
    protected $hidden=['is_deleted','created_at','updated_at'];
    public $timestamps=true;
  
    
}
