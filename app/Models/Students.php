<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;  
use Illuminate\Foundation\Auth\User as Authenticatable;

class Students extends Authenticatable
{
    use Notifiable;
    use HasFactory;
    protected $table="students";
     				
    protected $fillable=['id','name','title','email','phone','password','service_id','gender_id','is_deleted','created_at','updated_at'];
    protected $hidden=['is_deleted','created_at','updated_at'];
    public $timestamps=false;
    protected $guard='students';
    public function service(){
        return $this->belongsTo(Services::class,'service_id','id');
    }
}
