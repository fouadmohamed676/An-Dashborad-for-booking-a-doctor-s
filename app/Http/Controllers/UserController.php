<?php

namespace App\Http\Controllers;
 
use App\Models\Genders;
use App\Models\Services;
use App\Models\User; 
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
 
    public function index()
    {
        $genders = Genders::all();
        $services = Services::all();
        $data = User::select()->orderBy('id', 'DESC')->get();
        return view('users.index',compact('data','genders','services'));
    }

    public function create()
    {
        $genders = Genders::all();
        $services = Services::all();
        
        return view('users.create',compact('genders','services'));
    }

    public function store(Request $request)
    {  
            $user = new User();  
            $user->phone = $request->phone;
            $user->password = Hash::make($request->password);   
            $user->title = $request->title;  
            $user->service_id = $request->service_id;  
            $user->gender_id = $request->gender_id;  
            $user->name = $request->name;    
            $user->email = $request->email;    
             $user->save();
            if($user){
                return redirect()->route('users.index');
            }else{
                return redirect()->back();
            }
    
    }

    public function edit($id)
    { 
        $genders = Genders::all();
        $services = Services::all();
        $info = User::find($id);
        return view('users.edit',compact('info','genders','services'));
    }

    public function update(Request $request,User $id)
    {  
             $id->update($request->all());
            return redirect()->route('users.index');
    }

    public function delete($id)
    {
        $data = User::find($id);
        $data->update([
            'is_deleted'=>1
        ]);  
        return redirect()->route('users.index');
    }

    public function update_password(Request $request, $id)
    {
        $this->validate($request,
        ['password'=>'required'],
        ['password.required'=>'هذا الحقل مطلوب']
    );
        // try {
            $user = User::findorfail($id);
            $user->update([
                'password'=>Hash::make($request->password)
            ]);
 
            return redirect()->route('users.index');
        // }

        // catch (\Exception $e) {
            return redirect()->back()->withErrors(['error' => $e->getMessage()]);
        // }
    }


    function uploadImage($folder,$image)
    {
        $fileExtension = $image->getClientOriginalExtension();
        $fileName = time().rand(1,99).'.'.$fileExtension;
        $path = $folder;
        $image->move($path,$fileName);

        return $fileName;
    }//end of uploadImage

    public function Delete_attachment($disk,$path)
    {
        Storage::disk($disk)->delete($path);
    }

}
