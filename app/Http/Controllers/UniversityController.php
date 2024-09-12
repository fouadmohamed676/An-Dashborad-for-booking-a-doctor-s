<?php

namespace App\Http\Controllers;

use App\Models\University;
use Illuminate\Http\Request;

class UniversityController extends Controller
{
    public function show(){
        $universities=University::where('is_deleted','1')->get();
        return view('university.show',compact('universities'));
    }
    public function index(){
        $universities=University::where('is_deleted','0')->get();
        $count=University ::where('is_deleted','0')->get()->count();
        if($count==0){
            return redirect('/university/show')->with('info',' ');
        }
        else
        return  view('university.index',compact('universities'));
    }
    public function create(){
        return view('university.create');
    }
    public function save(Request $request){
        University::create($request->all());
        return redirect('/university/show')->with('create',' ');
    }
    public function update($id){
        $university=University::find($id);
        return view('university.update',compact('university'));
    }
    public function edit(Request $request,University $id){
        $id->update($request->all());
        return redirect()->route('university.show')->with('update',' ');
    }
    public function delete(University $id){
        $id->delete();
        return redirect()->route('university.show')->with('destroy',' ');
    }

    public function destroy($id){
        $data = University::find($id);
        if($data->is_deleted ==1){
            $data->is_deleted = ('0');
        }
        $data->update();
        return redirect('/university/show')->with('destroy',' ');
    }
    public function restore($id){
        $data = University::find($id);
        if($data->is_deleted ==0){
            $data->is_deleted = ('1');
        }
        $data->update();
        return redirect('/university/show')->with('restore',' ');
    }
    
    public function filters(){
        $university=University::where('is_deleted','1')->get();
        return view('university.filters',compact('university'));
    }

}
