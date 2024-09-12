<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;

use App\Http\Requests\OrderRequest;
use App\Models\Order;
use App\Models\Representative;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;

class UserOrderController extends Controller
{
    public function index()
    {
        $auth_id = auth()->user()->id;
        $data = Order::where('is_deleted', 0)->where('customer_id',$auth_id)->select()->orderBy('id', 'DESC')->get();
        return view('user.order.index',compact('data'));
    }

    public function create()
    {
        $representatives = Representative::where('is_deleted', 0)->get();
        return view('user.order.create',compact('representatives'));
    }

    public function store(OrderRequest $request)
    {
        try{
            $data_request = $request->except('_token');
            $data_request['customer_id'] = auth()->user()->id;
            $data_request['restaurant_name'] = auth()->user()->restaurant_name;
            $data_request['status'] = 0;
            $data = Order::create($data_request);
            $id = $data->id;
            $this->send($id);
            toastr()->success('تم اضافه البانات بنجاح','نجاح');
            return redirect()->route('user.orders.index');
        }

        catch (\Exception $e) {
            return redirect()->back()->with(['error' => $e->getMessage()]);
        }
    }

    public function edit($id)
    {
        $representatives = Representative::all();
        $info = Order::find($id);
        return view('user.order.edit',compact('info','representatives'));
    }

    public function update(Request $request, $id)
    {
        try{
            $data_request = $request->except('_token');
            $data = Order::findOrFail($id);
            $data->update($data_request);
            toastr()->success('تم تعديل البانات بنجاح','نجاح');
            return redirect()->route('user.orders.index');
        }

        catch (\Exception $e) {
            return redirect()->back()->withErrors(['error' => $e->getMessage()]);
        }
    }

        public function delete($id)
    {
        $data = Order::findOrFail($id);
        $data->update([
            'is_deleted'=>1
        ]);
        toastr()->error('تم حذف البانات بنجاح','نجاح');
        return redirect()->route('user.orders.index');
    }

    public function update_status(Request $request, $id)
    {
        try {
            $order = Order::findOrFail($id);
            $order->update([
                'status' => 4
            ]);

            toastr()->success('تم تعديل الحاله بنجاح','نجاح');
            return redirect()->route('user.orders.index');
        }

        catch (\Exception $e) {
            return redirect()->back()->withErrors(['error' => $e->getMessage()]);
        }
    }


    public function send($id) {
        $status;
        try {

            $order = Order::findorfail($id);
            if ($order->status == 0) {
                $representatives = Representative::where('is_deleted', 0)->get();

                foreach($representatives as $representive) {
                    $temp_id = DB::table('temp_orders')->insertGetId(
                    ['order_id' => $id, 'representative_id' => $representive->id]);

                    $response = Http::asForm()->post('https://hala2030.com/bot/api/app_send.php', [
                        'action' => 'new_order',
                        'id' => $id,
                        'temp_id' => $temp_id,
                        'phone' => $representive->phone
                    ]);
                    $status = $response;
                }


            }else {
                $status = $order->status;
            }
            toastr()->success('تم ارسال الطلب بنجاح','نجاح');
            return redirect()->route('user.orders.index');
            // return view('order.api_confirm',compact('id', 'status'));
        }
        catch (\Exception $e) {
            return redirect()->back()->withErrors(['error' => $e->getMessage()]);
        }
    }

}
