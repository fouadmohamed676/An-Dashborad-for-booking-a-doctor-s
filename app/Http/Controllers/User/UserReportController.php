<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;

use App\Models\Order;


class UserReportController extends Controller
{
    public function index()
    {
        $auth_id = auth()->user()->id;
        $orders = Order::where('is_deleted', 0)->where('customer_id', $auth_id)->get()->count();
        $ordersNew = Order::where('is_deleted', 0)->where('customer_id', $auth_id)->where('status',0)->count();
        $ordersSend = Order::where('is_deleted', 0)->where('customer_id', $auth_id)->where('status',1)->count();
        $ordersInDelivery = Order::where('is_deleted', 0)->where('customer_id', $auth_id)->where('status',2)->count();
        $ordersDoneDelivery = Order::where('is_deleted', 0)->where('customer_id', $auth_id)->where('status',3)->count();
        $ordersDel = Order::where('is_deleted', 0)->where('customer_id', $auth_id)->where('status',4)->count();
        $data = Order::where('is_deleted', 0)->where('customer_id',$auth_id)->select()->orderBy('id', 'DESC')->get();
        $restaurants = Order::where('is_deleted', 0)->where('customer_id',$auth_id)->get();

        return view('user.report.index',compact('data','restaurants','orders','ordersNew','ordersSend','ordersInDelivery','ordersDoneDelivery','ordersDel'));
    }

    public function searchAjax(Request $request)
    {
        if($request->ajax())
        {
            $auth_id = auth()->user()->id;
            $payment_type = $request->payment_type;
            $begin_date = $request->begin_date;
            $last_date = $request->last_date;
            if($payment_type == 'all'){

                $data = Order::where('is_deleted', 0)->where('customer_id', $auth_id)
                ->whereBetween('created_at',[Carbon::parse($begin_date)
                    ->format('Y-m-d 00:00:00'),Carbon::parse($last_date)
                    ->format('Y-m-d 23:59:59')])->orderBy('id', 'DESC')->get();
                    $count = count($data);
                    $En = $data->where('order_type',1)->count();
                    $Ex = $data->where('order_type',2)->count();

                    $total = $data->sum('bill_total');
                return view('user.report.ajaxSearch',
                [
                    'data'=>$data,
                    'count'=>$count,
                    'total'=>$total,
                    'En'=>$En,
                    'Ex'=>$Ex,
                ]);

            }

            $data = Order::where('is_deleted', 0)->where('customer_id', $auth_id)
            ->where('payment_type', $payment_type)
            ->whereBetween('created_at',[Carbon::parse($begin_date)
                ->format('Y-m-d 00:00:00'),Carbon::parse($last_date)
                ->format('Y-m-d 23:59:59')])->orderBy('id', 'DESC')->get();
                $count = count($data);
                $En = $data->where('order_type',1)->count();
                $Ex = $data->where('order_type',2)->count();

                $total = $data->sum('bill_total');
            return view('user.report.ajaxSearch',
            [
                'data'=>$data,
                'count'=>$count,
                'total'=>$total,
                'En'=>$En,
                'Ex'=>$Ex,
            ]);
        }//end if

    }//end of search_ajax




}


