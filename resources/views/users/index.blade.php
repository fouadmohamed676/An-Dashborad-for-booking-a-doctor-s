@extends('dashboard.admin.master')

@section('title')
المستخدمين
@stop

@section('content')
    <div class="content-header row">
        <div class="content-header-left col-md-9 col-12 mb-2">
            <div class="row breadcrumbs-top">
                <div class="col-12">
                    <h2 class="content-header-title float-left mb-0">المستخدمين</h2>
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
                            <a class="btn btn-primary round mr-1 mb-1 waves-effect waves-light" href="{{ route('users.create') }}">اضافة مستخدم</a>
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
                                                        <th>اسم الطالب</th>
                                                        <th>الهاتف</th>
                                                        <th>Email</th>
                                                        <th>العنوان</th>
                                                        <th>النوع</th>
                                                        <th>الخدمه</th> 
                                                        <th>اجراء</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach ($data as $index=>$info)
                                                    <tr>
                                                        <td>{{ $index + 1 }}</td>
                                                         <td>{{ $info->name }}</td>
                                                        <td>{{ $info->phone }}</td>
                                                        <td>{{ $info->email }}</td>
                                                        <td>{{ $info->title }}</td>
                                                        <td>{{ $info->gender->name }}</td>
                                                        <td>{{ $info->service->name }}</td> 
                                                        <td>
                                                            <div class="dropdown">
                                                                <button class="btn btn-sm btn-primary dropdown-toggle mr-1 waves-effect waves-light" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                    العمليات
                                                                </button>
                                                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton" x-placement="bottom-start" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(14px, 38px, 0px);">
                                                                    <a class="dropdown-item" href="{{route('users.edit',$info->id)}}" class="dropdown-item"><i style="color: green" class="feather icon-edit"></i> تعديل </a>
                                                                    <a class="dropdown-item" data-toggle="modal" data-target="#modal_DELETE{{ $info->id }}"><i style="color: #DC3545" class="feather icon-delete"></i>حذف</a>
                                                                </div>
                                                            </div>
                                                        </td>

                                                        <!-- Modal delete -->
                                                        <div class="modal fade text-left" id="modal_DELETE{{ $info->id }}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel1" aria-hidden="true">
                                                        <div class="modal-dialog modal-dialog-scrollable" role="document">
                                                            <div class="modal-content">
                                                                <div class="modal-header" style="background-color: #EA5455 !important;">
                                                                    <h4 class="modal-title" id="myModalLabel1" style="color: #FFFFFF">حذف مستخدم</h4>
                                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                        <span aria-hidden="true" style="color: #DC3545">&times;</span>
                                                                    </button>
                                                                </div>
                                                                <div class="modal-body">
                                                                    <strong>
                                                                        هل انت متاكد من انك تريد الحذف ؟
                                                                    </strong>
                                                                </div>
                                                                <div class="modal-footer">
                                                                    <button type="button" class="btn btn-light waves-effect waves-light" data-dismiss="modal">الغاء</button>
                                                                    <a href="{{ route('users.delete',$info->id) }}" type="submit" class="btn btn-danger waves-effect waves-light">تأكيد</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!--end delete-->

                                                    <!-- Modal status -->
                                                    <div class="modal fade text-left" id="modal_PASSWORD{{ $info->id }}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel1" aria-hidden="true">
                                                        <div class="modal-dialog modal-dialog-scrollable" role="document">
                                                            <div class="modal-content">
                                                                <div class="modal-header" style="background-color: #00CFE8 !important;">
                                                                    <h4 class="modal-title" id="myModalLabel1" style="color: #FFFFFF">تغيير كلمة المرور</h4>
                                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                        <span aria-hidden="true" style="color: #00CFE8 !important">&times;</span>
                                                                    </button>
                                                                </div>
                                                                <div class="modal-body">
                                                                    <br>
                                                                    <form action="{{ route('users.update_password',$info->id) }}" method="POST">
                                                                        @csrf
                                                                        <div class="form-label-group">
                                                                            <input type="password" id="first-name-floating" class="form-control" placeholder="كلمة المرور الجديده" name="password" >
                                                                            <label for="first-name-floating">كلمة المرور الجديده</label>
                                                                            @error('password')
                                                                            <span class="text-danger" id="basic-default-name-error" class="error">
                                                                                {{ $message }}
                                                                            </span>
                                                                            @enderror
                                                                        </div>
                                                                    </div>
                                                                    <div class="modal-footer">
                                                                        <button type="button" class="btn btn-light waves-effect waves-light">الغاء</button>
                                                                        <button type="submit" class="btn btn-info waves-effect waves-light">تأكيد</button>
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

