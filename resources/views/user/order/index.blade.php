
@extends('userMaster')

@section('title')
الطلبات
@stop

@section('content')
    <div class="content-header row">
        <div class="content-header-left col-md-9 col-12 mb-2">
            <div class="row breadcrumbs-top">
                <div class="col-12">
                    <h2 class="content-header-title float-left mb-0">قائمة الطلبات</h2>
                    <div class="breadcrumb-wrapper col-12">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="">الرئيسيه</a>
                            </li>
                            <li class="breadcrumb-item active">عرض
                            </li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="content-body">
        <!-- Zero configuration table -->
        <section id="basic-datatable">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <a class="btn btn-primary round mr-1 mb-1 waves-effect waves-light" href="{{ route('user.orders.create') }}"><i class="feather icon-plus"></i>اضافة طلب</a>
                        </div>
                        <div class="card-content">
                            <div class="card-body card-dashboard">
                                <div class="table-responsive">
                                    <div class="search_ajax_div" id="search_ajax_div">
                                        @if (@isset($data) && !@empty($data) && count($data) > 0)
                                            <table class="table zero-configuration" id="datatable">
                                                <thead>
                                                    <tr>
                                                        <th>#</th>
                                                        <th>الهاتف</th>
                                                        {{-- <th>المنطقة</th>
                                                        <th>المدينة</th> --}}
                                                        <th>الحي</th>
                                                        <th>العنوان</th>
                                                        <th>اجمالي الفاتوره</th>
                                                        <th>طريقة الدفع</th>
                                                        <th>نوع الطلب</th>
                                                        <th>التاريخ</th>
                                                        <th>الوقت</th>
                                                        <th>حاله الطلب</th>
                                                        <th>اجراء</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach ($data as $index=>$info)
                                                    <tr>
                                                        <td>{{ $index + 1 }}</td>
                                                        <td>{{ $info->phone }}</td>
                                                        {{-- <td>{{ $info->customer->city->zone }}</td>
                                                        <td>{{ $info->customer->city->name }}</td> --}}
                                                        <td>{{ $info->neighborhood }}</td>
                                                        <td>{{ $info->address }}</td>
                                                        <td>{{ $info->bill_total }}</td>
                                                        <td> @if($info->payment_type == 1)مدى @elseif($info->payment_type == 2)كاش  @elseif($info->payment_type == 3)تحويل @endif </td>
                                                        <td> @if($info->order_type == 1) داخلي @else خارجي @endif </td>
                                                        {{-- <td> @if($info->status == 1) <div class="badge badge-pill badge badge-info">جديد</div> @elseif($info->status == 2) <div class="badge badge-pill badge badge-secondary">قيد الاجراء</div> @elseif($info->status == 3) <div class="badge badge-pill badge badge-success">مكتمل</div> @endif </td> --}}
                                                        <td> {{ $info->created_at->format('Y-m-d') }}</td>
                                                        <td>{{ $info->created_at->format('H:i') }}</td>
                                                        <td>
                                                            @if($info->status == 0)
                                                            <div class="badge badge-pill badge badge-info">جديد</div>
                                                            @elseif($info->status == 1)
                                                            <div class="badge badge-pill badge badge-secondary">تم الارسال</div>
                                                            @elseif($info->status == 2)
                                                            <div class="badge badge-pill badge badge-warning">قيد التوصيل</div>
                                                            @elseif($info->status == 3)
                                                            <div class="badge badge-pill badge badge-success">تم التوصيل</div>
                                                            @else
                                                            <div class="badge badge-pill badge badge-danger">ملغي</div>
                                                            @endif
                                                        </td>
                                                        <td>
                                                            @if ($info->status == 0 || $info->status == 1)
                                                                <a class="btn btn-danger btn-sm" href="{{ route('user.orders.update_status',$info->id) }}">الغاء</a>
                                                            @elseif ($info->status == 4)
                                                            الطلب ملغي
                                                            @else
                                                            لا يمكن الالغاء
                                                            @endif
                                                        </td>

                                                    </tr>
                                                    @endforeach
                                                </tbody>
                                            </table>
                                        @else
                                            <div class="alert alert-danger" role="alert">
                                                <p class="mb-0">
                                                    لا توجد بيانات
                                                </p>
                                            </div>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--/ Zero configuration table -->
    </div>


@endsection

@section('script')

@endsection

