
@extends('dashboard.user.master')

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
                        <div class="card-content">
                            <div class="card-body card-dashboard">
                                <div class="table-responsive">
                                    <div class="search_ajax_div" id="search_ajax_div">
                                        @if (@isset($data) && !@empty($data) && count($data) > 0)
                                            <table class="table zero-configuration" id="datatable">
                                                <thead>
                                                    <tr>
                                                        <th>#</th>
                                                        <th>المريض</th>
                                                        <th>الهاتف</th>
                                                        <th>الطالب</th>
                                                        <th>الايميل</th>
                                                        <th>حالة الطلب</th> 
                                                        <th>نوع الخدمه</th> 
                                                        <th>الوقت</th>
                                                        <th>اجراء</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach ($data as $index=>$info)
                                                    <tr>
                                                            <td>{{ $index + 1 }}</td>
                                                            <td>{{ $info->patient->name }}</td>
                                                            <td>{{ $info->patient->phone }}</td>
                                                            <td>{{ $info->user->name }}</td>
                                                            <td>{{ $info->patient->email}}</td>
                                                            <td>{{ $info->status->name}}</td>
                                                            <td>{{ $info->user->service->name}}</td>
                                                            <td>{{ $info->created_at}}</td>
                                                            <td>
                                                                <div class="dropdown">
                                                                    <button class="btn btn-sm btn-primary dropdown-toggle mr-1 waves-effect waves-light" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                        العمليات
                                                                    </button>
                                                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton" x-placement="bottom-start" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(14px, 38px, 0px);">
                                                                        <a class="dropdown-item" data-toggle="modal" data-target="#modal_STATUS{{ $info->id }}"><i style="color: #00CFE8" class="feather icon-refresh-cw"></i>تغيير حاله الطلب</a>
                                                                        {{-- <a class="dropdown-item" href="{{route('order.update',$info->id)}}" class="dropdown-item"><i style="color: green" class="feather icon-edit"></i> تعديل </a> --}}
                                                                        {{-- <a class="dropdown-item" data-toggle="modal" data-target="#modal_DELETE{{ $info->id }}"><i style="color: #DC3545" class="feather icon-delete"></i>حذف</a> --}}
                                                                    </div>
                                                                </div>
                                                            </td>


                                                            <!-- Modal delete -->
                                                          
                                                        <!--end delete-->

                                                        <!-- Modal status -->
                                                       <div class="modal fade text-left" id="modal_STATUS{{ $info->id }}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel1" aria-hidden="true">
                                                            <div class="modal-dialog modal-dialog-scrollable" role="document">
                                                                <div class="modal-content">
                                                                    <div class="modal-header" style="background-color: #2e5053 !important;">
                                                                        <h4 class="modal-title" id="myModalLabel1" style="color: #FFFFFF">حالة الطلب</h4>
                                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                            <span aria-hidden="true" style="color: #00CFE8 !important">&times;</span>
                                                                        </button>
                                                                    </div>
                                                                    <div class="modal-body">
                                                                        <br>
                                                                        <form action="{{ route('order.update_status',$info->id) }}" method="POST">
                                                                            @csrf
                                                                            <fieldset class="form-group">
                                                                                <select class="form-control" id="basicSelect" name="status">
                                                                                    @foreach($statuses as $status)
                                                                                    <option value="{{$status->id }}" {{$status->id == $info->status_id  ? 'selected' : ''}}>
                                                                                        {{$status->name}}</option>
                                                                                    @endforeach 
                                                                                </select>
                                                                            </fieldset>
                                                                        </div>
                                                                        <div class="modal-footer">
                                                                            <button type="button" class="btn btn-light waves-effect waves-light">الغاء</button>
                                                                            <button type="submit" class="btn btn-info waves-effect waves-light">تأكيد</button>
                                                                            {{-- <a href="{{ route('orders.delete',$info->id) }}" type="submit" class="btn btn-info waves-effect waves-light">تأكيد</a> --}}
                                                                        </div>
                                                                    </form>
                                                                </div>
                                                            </div>
                                                        </div> 
                                                        <!--end status-->
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

