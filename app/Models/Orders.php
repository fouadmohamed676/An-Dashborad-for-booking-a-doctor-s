<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Orders extends Model
{
    use HasFactory;
    protected $table="orders";
   		
    protected $fillable=['id','patient_id','user_id','status_id','date','is_deleted','created_at','updated_at'];
    protected $hidden=['is_deleted','patient_id','user_id','created_at','updated_at'];
    
    public $timestamps=false;
    public function user(){
        return $this->belongsTo(User::class,'user_id','id');
    }
    public function patient(){
        return $this->belongsTo(Patient::class,'patient_id','id');
    }
    public function status(){
        return $this->belongsTo(Status::class,'status_id','id');
    }
    public function userService(){
        return $this->hasOne(Orders::class,'user_id','id');
    }
}
