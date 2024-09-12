
@extends('dashboard.user.master')

@section('title')
الرئيسيه
@stop

@section('content')

<div class="content-header row">
</div>
<div class="content-body">
    <!-- Dashboard Ecommerce Starts -->
    <section id="dashboard-ecommerce">
        <div class="row">
            <div class="col-lg-3 col-sm-6 col-12">
                <div class="card">
                    <div class="card-header d-flex flex-column align-items-start pb-0">
                        <div class="avatar bg-rgba-danger p-50 m-0">
                            <div class="avatar-content">
                                <i class="feather icon-shopping-cart text-danger font-medium-5"></i>
                            </div>
                        </div>
                        <h2 class="text-bold-700 mt-1">43</h2>
                        <p class="mb-0">عدد الطلبات</p>
                    </div>
                    <div class="card-content">
                        <div id="line-area-chart-3"></div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6 col-12">
                <div class="card">
                    <div class="card-header d-flex flex-column align-items-start pb-0">
                        <div class="avatar bg-rgba-primary p-50 m-0">
                            <div class="avatar-content">
                                <i class="feather icon-users text-primary font-medium-5"></i>
                            </div>
                        </div>
                        <h2 class="text-bold-700 mt-1">66</h2>
                        <p class="mb-0">عدد المستخدمين</p>
                    </div>
                    <div class="card-content">
                        <div id="line-area-chart-1"></div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6 col-12">
                <div class="card">
                    <div class="card-header d-flex flex-column align-items-start pb-0">
                        <div class="avatar bg-rgba-success p-50 m-0">
                            <div class="avatar-content">
                                <i class="feather icon-link-2 text-success font-medium-5"></i>
                            </div>
                        </div>
                        <h2 class="text-bold-700 mt-1">8009</h2>
                        <p class="mb-0">عدد المناديب</p>
                    </div>
                    <div class="card-content">
                        <div id="line-area-chart-2"></div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6 col-12">
                <div class="card">
                    <div class="card-header d-flex flex-column align-items-start pb-0">
                        <div class="avatar bg-rgba-warning p-50 m-0">
                            <div class="avatar-content">
                                <i class="feather icon-map-pin text-warning font-medium-5"></i>
                            </div>
                        </div>
                        <h2 class="text-bold-700 mt-1">09</h2>
                        <p class="mb-0">عدد المدن</p>
                    </div>
                    <div class="card-content">
                        <div id="line-area-chart-4"></div>
                    </div>
                </div>
            </div>
        </div>

        {{-- <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="mb-0">اخر 10 طلبات على النظام</h4>
                    </div>
                    <div class="card-content">
                        <div class="table-responsive mt-1">
                            <table class="table table-hover-animation mb-0">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>اسم المطعم</th>
                                        <th>المدينه</th>
                                        <th>اجمالي الفاتوره</th>
                                        <th>التاريخ</th>
                                        <th>الوقت</th>
                                        <th>الحاله</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse($lastOrers as $index => $order )
                                    <tr>
                                        <td>{{ $index + 1 }}</td>
                                        <td>{{ $order->customer->restaurant_name }}</td>
                                        <td>{{ $order->customer->city->name }}</td>
                                        <td style="color: #28C76F !important">{{ $order->bill_total }}</td>
                                        <td>{{ $order->created_at->format('Y-m-d') }}</td>
                                        <td> {{ $order->created_at->format('H:m:s') }}</td>
                                        <td>
                                            @if($order->status == 0)
                                            <div class="badge badge-pill badge badge-info">طلب جديد</div>
                                            @elseif($order->status == 1)
                                            <div class="badge badge-pill badge badge-secondary">تم الارسال</div>
                                            @elseif($order->status == 2)
                                            <div class="badge badge-pill badge badge-warning">قيد التوصيل</div>
                                            @elseif($order->status == 3)
                                            <div class="badge badge-pill badge badge-success">تم التوصيل</div>
                                            @else
                                            <div class="badge badge-pill badge badge-danger">ملغي</div>
                                            @endif
                                        </td>
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
        </div> --}}
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

