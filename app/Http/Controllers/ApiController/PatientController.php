<?php

namespace App\Http\Controllers\ApiController;

use App\Http\Controllers\Controller;
use App\Models\Banner;
use App\Models\Orders;
use App\Models\Patient;
use App\Models\Services;
use App\Models\User; 
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB; 

class PatientController extends Controller
{
    
   public function register(Request $request){
   
    // $request->merge(['password' => Hash::make($request->input('password'))]);

    $data= Patient::create($request->all());
    return ['status'=>'success','response'=>json_decode($data)];
    }
    public function loginPatient(Request $request)
        {   

            $data = DB::table('patients')->where('email',$request->email)->get();
            $count=$data->count();
            if ($count==0) {  
                $data_=['error password or email'];
                return ['status'=>'fail','response'=>$data_];
            }else{
                return ['status'=>'success','response'=>json_decode($data)];
            }
    }


    public function index()
    { 
        $data = User::with('service','gender')->select()->orderBy('id', 'DESC')->get();
        return ['status'=>'success','response'=>json_decode($data)]; 
    }

     

    public function servicesIndex()
    { 
        $data = Services::where('is_deleted',0)->select()->orderBy('id', 'DESC')->get();
        return ['status'=>'success','response'=>json_decode($data)]; 
    }
    public function serviceUser($id)
    { 
         
        $data = User::where('service_id',$id)->get();
        return ['status'=>'success','response'=>json_decode($data)]; 
    }
    public function userData($id)
    { 
        $data = User::with('service')->find($id);
        return ['status'=>'success','response'=>json_decode($data)]; 
    }

    public function storeOrder(Request $request){

        $data=Orders::create($request->all());   
       
        if ($data) { 
            { 
                $result=Orders::with('user','status')->find($data);
                 
                return ['status'=>'success', 
                'response'=>json_decode($result), 
            ]; 
            }
                }else{
                return ['status'=>'fail','response'=>json_decode($request)];
            }
    }
    public function getService($id){

        $response_id=$id;
        $service = User::with('service')->find($response_id);
        if ($service) { 
            {  
                return ['status'=>'success', 
                'user'=>json_decode($service)];
            } 
        }


    }

    public function lastOrder($id){

        $data=Orders::where('patient_id',$id)->with('user','status')->select()->orderBy('id', 'DESC')->get();
        
        if ($data) { 
            { 
                return ['status'=>'success','response'=>json_decode($data)];
            } 
        }
    }


    public function banners(){

        $data = Banner::where('is_deleted', 0)->select()->orderBy('id', 'DESC')->get();
         
        if ($data) { 
            { 
                return ['status'=>'success','response'=>json_decode($data)];
            } 
        }
    }





}
