<?php

namespace App\Http\Controllers;

use App\Models\Blood;
use App\Models\Orders;
use App\Models\Patient;
use Illuminate\Http\Request;

class PatientController extends Controller
{
    public function show(){
         
        $data=Patient::select()->orderBy('id', 'DESC')->get();
        return view('patient.index',compact('data'));
    }
    public function index(){
        $statuses=Patient::where('is_deleted','0')->get();
        $count=Patient ::where('is_deleted','0')->get()->count();
        if($count==0){
            return redirect('/patient/index')->with('info',' ');
        }
        else
        return  view('patient.index',compact('statuses'));
    }
    public function create(){
        return view('patient.create');
    }
    public function save(Request $request){
        Patient::create($request->all());
        return redirect('/patient/show')->with('create',' ');
    }
    public function update($id){
        $bloods=Blood::where('is_deleted','1')->get();
        $status=Patient::find($id);
        return view('patient.update',compact('status','bloods'));
    }
    public function edit(Request $request,Patient $id){
        $id->update($request->all());
        return redirect()->route('patient.index');
    }
    public function delete(Patient $id){
        $id->delete();
        return redirect()->route('patient.index')->with('destroy',' ');
    }

    public function logs($id){
        $data = Orders::where('patient_id',$id)->get(); 
        return view('patient.logs',compact('data'));
    }

    public function destroy($id){
        $data = Patient::find($id); 
        $data->is_deleted = ('1');
        $data->update();
        return redirect('/patient/show')->with('destroy',' ');
    }
    public function restore($id){
        $data = Patient::find($id); 
        $data->is_deleted = ('0');
        $data->update();
        return redirect('/patient/show')->with('restore',' ');
    }
    
    public function filters(){
        $statuses=Patient::where('is_deleted','1')->get();
        return view('status.filters',compact('statuses'));
    }


}
