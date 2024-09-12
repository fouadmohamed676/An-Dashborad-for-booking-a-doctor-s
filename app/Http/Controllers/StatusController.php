<?php

namespace App\Http\Controllers;

use App\Models\Status;
use Illuminate\Http\Request;

class StatusController extends Controller
{

    public function show(){
        $data=Status::where('is_deleted','1')->get();
        return view('status.index',compact('data'));
    }
    public function index(){
        $statuses=Status::where('is_deleted','0')->get();
        $count=Status ::where('is_deleted','0')->get()->count();
        if($count==0){
            return redirect('/status/index')->with('info',' ');
        }
        else
        return  view('status.index',compact('statuses'));
    }
    public function create(){
        return view('status.create');
    }
    public function save(Request $request){
        Status::create($request->all());
        return redirect('/status/show')->with('create',' ');
    }
    public function update($id){
        $status=Status::find($id);
        return view('status.update',compact('status'));
    }
    public function edit(Request $request,Status $id){
        $id->update($request->all());
        return redirect()->route('status.index')->with('update',' ');
    }
    public function delete(Status $id){
        $id->delete();
        return redirect()->route('status.index')->with('destroy',' ');
    }

    public function destroy($id){
        $data = Status::find($id);
        if($data->is_deleted ==1){
            $data->is_deleted = ('0');
        }
        $data->update();
        return redirect('/status/show')->with('destroy',' ');
    }
    public function restore($id){
        $data = Status::find($id);
        if($data->is_deleted ==0){
            $data->is_deleted = ('1');
        }
        $data->update();
        return redirect('/status/show')->with('restore',' ');
    }
    
    public function filters(){
        $statuses=Status::where('is_deleted','1')->get();
        return view('status.filters',compact('statuses'));
    }

}
