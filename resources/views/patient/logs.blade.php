
@extends('dashboard.admin.master')
@section('title')
 المرضى
@stop

@section('content')
    <div class="content-header row">
        <div class="content-header-left col-md-9 col-12 mb-2">
            <div class="row breadcrumbs-top">
                <div class="col-12">
                    <h2 class="content-header-title float-left mb-0">قائمة  المرضى</h2>
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
                            {{-- <button type="button" class="tn btn-primary round mr-1 mb-1 waves-effect waves-light" data-toggle="modal" data-target="#modal_Edit{{ $info->id }}"> --}}
                            <a class="btn btn-primary round mr-1 mb-1 waves-effect waves-light" href="#"  data-toggle="modal" data-target="#default">اضافة</a>
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
                                                        <th>Std-Name</th>
                                                        <th>Std-Title</th>
                                                        <th>Std-Service</th>
                                                        <th>Date</th> 
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach ($data as $index=>$info)
                                                    <tr>
                                                            <td>{{ $index + 1 }}</td>
                                                            <td>{{ $info->user->name }}</td> 
                                                            <td>{{ $info->user->title }}</td> 
                                                            <td>{{ $info->user->service->name }}</td> 
                                                            <td>{{ $info->created_at}}</td> 
                                                         

                                                            <!-- Modal delete -->
                                                            <div class="modal fade text-left" id="modal_DELETE{{ $info->id }}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel1" aria-hidden="true">
                                                                <div class="modal-dialog modal-dialog-scrollable" role="document">
                                                                    <div class="modal-content">
                                                                        <div class="modal-header" style="background-color: #EA5455 !important;">
                                                                            <h4 class="modal-title" id="myModalLabel1" style="color: #FFFFFF">حذف مدينة</h4>
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
                                                                            <a href="{{ route('patient.destroy',$info->id) }}" type="submit" class="btn btn-danger waves-effect waves-light">تأكيد</a>
                                                                        </div> 
                                                                        {{-- {{ route('city.delete',$info->id) }} --}}
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!--end delete-->


                                                            
                                                            
                                                            <!-- Modal restore -->
                                                            <div class="modal fade text-left" id="modal_success{{ $info->id }}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel1" aria-hidden="true">
                                                                <div class="modal-dialog modal-dialog-scrollable" role="document">
                                                                    <div class="modal-content">
                                                                        <div class="modal-header" style="background-color:seagreen !important;">
                                                                            <h4 class="modal-title" id="myModalLabel1" style="color: #FFFFFF">إستعاده خدمه</h4>
                                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                                <span aria-hidden="true" style="color:seagreen">&times;</span>
                                                                            </button>
                                                                        </div>
                                                                        <div class="modal-body">
                                                                            <strong>
                                                                                هل انت متاكد من انك تريد الإستعاده ؟
                                                                            </strong>
                                                                        </div>
                                                                        <div class="modal-footer">
                                                                            <button type="button" class="btn btn-light waves-effect waves-light" data-dismiss="modal">الغاء</button>
                                            
                                                                                <a href="{{ route('patient.restore',$info->id) }}" type="submit" class="btn btn-success waves-effect waves-light">تأكيد</a>
                                                                        </div>  
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!--end restore-->


 

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

