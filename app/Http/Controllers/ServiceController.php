<?php

namespace App\Http\Controllers;

use App\Models\Services;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function show(){
        
        $data = Services::where('is_deleted', 0)->select()->orderBy('id', 'DESC')->get();
        return view('service.index',compact('data'));
    }
    public function index(){
        $data=Services::where('is_deleted','1')->get();
       
        return  view('service.index',compact('data'));
    }
    public function create(){
        return view('service.create');
    }
    public function save(Request $request){
        Services::create($request->all());
        return redirect('/service/show')->with('create',' ');
    }
    public function update($id){
        $service=Services::find($id);
        $info=Services::find($id);
        return view('service.edit',compact('service','info'));
    }
    public function edit(Request $request,Services $id){
        $id->update($request->all());
        return redirect()->route('service.index')->with('update',' ');
    }
    public function delete(Services $id){
        $id->delete();
        return redirect()->route('service.index')->with('destroy',' ');
    }

    public function destroy($id){
         $data = Services::find($id); 
         $data->is_deleted = ('1');
         $data->update();
        return redirect('/service/index')->with('destroy',' ');
    }
    public function restore($id){
        $data = Services::find($id); 
        $data->is_deleted = ('0');
        $data->update();
        return redirect('/service/index')->with('restore',' ');
    } 
 


}
