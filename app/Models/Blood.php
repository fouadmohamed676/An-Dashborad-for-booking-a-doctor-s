<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blood extends Model
{
    use HasFactory;
    protected $table="bloods";
    		 	
    protected $fillable=['id','name','is_deleted','created_at','updated_at'];
    protected $hidden=['is_deleted','created_at','updated_at'];
    public $timestamps=true;
}
