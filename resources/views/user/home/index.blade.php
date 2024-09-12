
@extends('userMaster')

@section('title')
الطلبات
@stop

@section('content')

<div class="content-header row">
</div>
<div class="content-body">
    <!-- Dashboard Ecommerce Starts -->
    <section id="dashboard-ecommerce">

        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="mb-0">اخر 5 طلبات على النظام</h4>
                    </div>
                    <div class="card-header">
                        <a class="btn btn-primary round mr-1 mb-1 waves-effect waves-light" href="{{ route('user.orders.create') }}">اضافة طلب</a>
                    </div>
                    <div class="card-content">
                        <div class="table-responsive mt-1">
                            <table class="table table-hover-animation mb-0">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>الحي</th>
                                        <th>العنوان</th>
                                        {{-- <th>اسم المندوب</th> --}}
                                        <th>اجمالي الفاتوره</th>
                                        <th>التاريخ</th>
                                        <th>الحاله</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse(App\Models\Order::where('customer_id',auth()->user()->id)->latest()->take(5)->get() as $index => $order )
                                    <tr>
                                        <td>{{ $index + 1 }}</td>
                                        <td>{{ $order->neighborhood }}</td>
                                        <td>{{ $order->address }}</td>
                                        {{-- <td>{{ $order->representative->name }}</td> --}}
                                        <td style="color: #28C76F !important">{{ $order->bill_total }}</td>
                                        <td>{{ $order->created_at->format('Y-m-d') }}</td>
                                        <td> @if($order->status == 1) <div class="badge badge-pill badge badge-info">جديد</div> @elseif($order->status == 2) <div class="badge badge-pill badge badge-secondary">قيد الاجراء</div> @elseif($order->status == 3) <div class="badge badge-pill badge badge-success">مكتمل</div> @endif </td>
                                    </tr>
                                    @empty
                                        <div class="alert alert-danger" role="alert">
                                            <p class="mb-0">لا توجد بيانات</p>
                                        </div>
                                    @endforelse
                                </tbody>
                            </table>
                            <br>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Dashboard Ecommerce ends -->

    <!-- BEGIN: Footer-->
    <footer class="footer footer-static footer-light">

    </footer>
    <!-- END: Footer-->

</div>

@endsection

@section('script')

@endsection

