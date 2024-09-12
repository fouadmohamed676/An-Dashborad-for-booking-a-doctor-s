<?php

namespace App\Http\Controllers;

use App\Models\banner;
use Illuminate\Http\Request;

class BannerController extends Controller
{
    public function show(){
        
        $data = Banner::where('is_deleted', 0)->select()->orderBy('id', 'DESC')->get();
        return view('banner.index',compact('data'));
    }
    public function index(){
        $data=Banner::where('is_deleted','1')->get();
        return  view('banner.index',compact('data'));
    }
    public function create(){
        return view('banner.create');
    }
    public function save(Request $request){
        // return $request;
        Banner::create($request->all());
        return redirect('/banner/show');
    }
    public function update($id){
        $banner=Banner::find($id);
        $info=Banner::find($id);
        return view('banner.edit',compact('banner','info'));
    }
    public function edit(Request $request,Banner $id){
        $id->update($request->all());
        return redirect()->route('banner.show');
    }
    public function delete(Banner $id){
        $id->delete();
        return redirect()->route('banner.show');
    }

    public function destroy($id){
         $data = Banner::find($id); 
         $data->is_deleted = ('1');
         $data->update();
        return redirect('/banner/show');
    }
    public function restore($id){
        $data = Banner::find($id); 
        $data->is_deleted = ('0');
        $data->update();
        return redirect('/banner/show');
    } 
}
