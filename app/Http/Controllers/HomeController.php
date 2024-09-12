<?php

namespace App\Http\Controllers;

use App\Models\Orders;
use App\Models\Patient;
use App\Models\Services;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function index()
    {
        $users = User::all()->count();
        $orders = Orders::all()->count();
        $services=Services::all()->count();
        $patients=Patient::all()->count();
        return view('home.index',compact('users','orders','services','patients'));
    }

    public function indexUser()
    {
        $user_id=Auth::user()->id;
        $total = Orders::where('user_id',$user_id)->count();
        $newOrder = Orders::where('status_id',1)->count();
        $success = Orders::where('status_id',3)->count();
        $waiting = Orders::where('status_id',2)->count();
        return view('dashboard.user.home',compact('total','success','waiting','newOrder'));
    }
}


