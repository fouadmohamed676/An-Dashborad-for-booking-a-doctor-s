<?php

namespace App\Http\Controllers;
 
use App\Models\Orders;
use App\Models\Patient; 
use App\Models\Status;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth; 

class OrderController extends Controller
{
    public function index()
    { 
        $user_id=Auth::user()->id;
        $data = Orders::where('user_id',$user_id)->select()->orderBy('id', 'DESC')->get();
        return view('order.index',compact('data'));
    }
    public function indexUser()
    {  
        $statuses=Status::get();
        $user_id=Auth::user()->id;
        $data = Orders::where('user_id',$user_id)->select()->orderBy('id', 'DESC')->get();
        return view('dashboard.user.order.index',compact('data','statuses'));
    }
 


    public function update($id){
        $info=Orders::find($id);
        $patients=Patient::get();
        $data=Patient::find($info->patient_id);
        $statuses=Status::get();
        return view('dashboard.user.order.edit',compact('info','patients','statuses','data'));
    } 


    public function edit(Request $request,Orders $id){
        $id->update($request->all());
        return redirect()->route('order.user.index');
    }



    public function delete($id)
    {
        $data = Orders::find($id);
        $data->update([
            'is_deleted'=>1
        ]); 
        return redirect()->route('dashboard\user\orders\index');
    }

    public function update_status(Request $request, $id)
    {
        try {
            $order = Orders::findOrFail($id);
            $order->update([
                'status_id'=>$request->status
            ]);
 
            return redirect()->route('dashboard\user\orders\index');
        }

        catch (\Exception $e) {
            return redirect()->back()->withErrors(['error' => $e->getMessage()]);
        }
    }
     
 ########################### End User Function  ######################################






 public function indexAdmin()
 { 
    $statuses=Status::get();
     $user_id=Auth::user()->id;
     $data = Orders::select()->orderBy('id', 'DESC')->get();
     return view('dashboard.admin.orders.index',compact('data','statuses'));
 }



 public function updateAdmin($id){
     $info=Orders::find($id);
     $patients=Patient::get();
     $data=Patient::find($info->patient_id);
     $statuses=Status::get();
     $users=User::get();
     return view('dashboard.admin.orders.edit',compact('info','patients','statuses','data','users'));
 } 


 public function editAdmin(Request $request,Orders $id){
     $id->update($request->all());
     return redirect()->route('dashboard.admin.orders.edit');
 }



 public function deleteAdmin($id)
 {
     $data = Orders::find($id);
     $data->update([
         'is_deleted'=>1
     ]); 
     return redirect()->route('orders.index');
 }

 public function restoreAdmin($id)
 {
     $data = Orders::find($id);
     $data->update([
         'is_deleted'=>0
     ]); 
     return redirect()->route('orders.index');
 }

 public function destroyAdmin($id)
 {
     $data = Orders::find($id);
     $data->update([
         'is_deleted'=>1
     ]); 
     return redirect()->route('orders.index');
 }

 public function update_statusAdmin(Request $request, $id)
 {
     try {
         $order = Orders::findOrFail($id);
         $order->update([
             'status_id'=>$request->status
         ]);
 
         return redirect()->route('orders.index');
     }

     catch (\Exception $e) {
         return redirect()->back()->withErrors(['error' => $e->getMessage()]);
     }
 }

 

 ########################### End User Function  ######################################

    

}
