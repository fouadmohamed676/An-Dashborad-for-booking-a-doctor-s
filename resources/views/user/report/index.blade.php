
@extends('userMaster')

@section('title')
الأحصائيات
@stop

@section('content')
    <div class="content-header row">
        <div class="content-header-left col-md-9 col-12 mb-2">
            <div class="row breadcrumbs-top">
                <div class="col-12">
                    <h2 class="content-header-title float-left mb-0">الأحصائيات</h2>
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
        {{-- <section id="basic-datatable"> --}}



                <!-- Dashboard Ecommerce Starts -->
    <section id="dashboard-ecommerce">
        <div class="row">
            <div class="col-lg-2 col-sm-6 col-12">
                <div class="card">
                    <div class="card-header d-flex flex-column align-items-start pb-0">
                        <div class="avatar bg-rgba-primary p-50 m-0">
                            <div class="avatar-content">
                                <i class="feather icon-shopping-cart text-primary font-medium-5"></i>
                            </div>
                        </div>
                        <h2 class="text-bold-700 mt-1">{{ $ordersNew}}</h2>
                        <p class="mb-0">عدد الطلبات الجديدة</p>
                    </div>
                    <div class="card-content">
                        {{-- <div id="line-area-chart-1"></div> --}}
                        <br>
                    </div>
                </div>
            </div>
            <div class="col-lg-2 col-sm-6 col-12">
                <div class="card">
                    <div class="card-header d-flex flex-column align-items-start pb-0">
                        <div class="avatar bg-rgba-info p-50 m-0">
                            <div class="avatar-content">
                                <i class="feather icon-mail text-info font-medium-5"></i>
                            </div>
                        </div>
                        <h2 class="text-bold-700 mt-1">{{ $ordersSend }}</h2>
                        <p class="mb-0">عدد الطلبات التي تم ارسالها </p>
                    </div>
                    <div class="card-content">
                        {{-- <div id="line-area-chart-2"></div> --}}
                        <br>
                    </div>
                </div>
            </div>
            <div class="col-lg-2 col-sm-6 col-12">
                <div class="card">
                    <div class="card-header d-flex flex-column align-items-start pb-0">
                        <div class="avatar bg-rgba-warning p-50 m-0">
                            <div class="avatar-content">
                                <i class="feather icon-map text-warning font-medium-5"></i>
                            </div>
                        </div>
                        <h2 class="text-bold-700 mt-1">{{ $ordersInDelivery }}</h2>
                        <p class="mb-0">عدد الطلبات قيد التوصيل</p>
                    </div>
                    <div class="card-content">
                        {{-- <div id="line-area-chart-4"></div> --}}
                        <br>
                    </div>
                </div>
            </div>

            <div class="col-lg-2 col-sm-6 col-12">
                <div class="card">
                    <div class="card-header d-flex flex-column align-items-start pb-0">
                        <div class="avatar bg-rgba-success p-50 m-0">
                            <div class="avatar-content">
                                <i class="feather icon-map-pin text-success font-medium-5"></i>
                            </div>
                        </div>
                        <h2 class="text-bold-700 mt-1">{{ $ordersDoneDelivery }}</h2>
                        <p class="mb-0">عدد الطلبات التي تم توصيلها</p>
                    </div>
                    <div class="card-content">
                        {{-- <div id="line-area-chart-2"></div> --}}
                        <br>
                    </div>
                </div>
            </div>

            <div class="col-lg-2 col-sm-6 col-12">
                <div class="card">
                    <div class="card-header d-flex flex-column align-items-start pb-0">
                        <div class="avatar bg-rgba-danger p-50 m-0">
                            <div class="avatar-content">
                                <i class="feather icon-x-circle text-danger font-medium-5"></i>
                            </div>
                        </div>
                        <h2 class="text-bold-700 mt-1">{{ $ordersDel }}</h2>
                        <p class="mb-0">عدد الطلبات الملغيه</p>
                    </div>
                    <div class="card-content">
                        {{-- <div id="line-area-chart-3"></div> --}}
                        <br>
                    </div>
                </div>
            </div>
        </div>

    {{-- </section> --}}
    <!-- Dashboard Ecommerce ends -->



            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <br>
                        <div class="card-content">
                            <div class="card-body card-dashboard">

                                <form action="" class="form" enctype="multipart/form-data" autocomplete="off">
                                    @csrf
                                    <div class="form-body">
                                        <input id="ajax_search_url" type="hidden" value="{{ route('user.search_ajax') }}">
                                        <input id="ajax_search_token" type="hidden" value="{{ csrf_token() }}">

                                        <div class="row">
                                            <div class="col-3">
                                                <div class="form-group validate">
                                                    <select class="form-control" id="payment_type">
                                                        <option value="" disabled selected>-- اختر طريقه الدفع --</option>
                                                        <option value="all">بحث بالكل</option>
                                                        <option value="1">مدى</option>
                                                        <option value="2">كاش</option>
                                                        <option value="3">تحويل</option>
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="col-3">
                                                <div class="form-label-group position-relative has-icon-left">
                                                    <fieldset class="form-label-group">
                                                        <input type="date" id="begin_date" class="form-control" name="begin_date" placeholder="ادخل تاريخ البدايه">
                                                        <label for="floating-label1">ادخل تاريخ البدايه</label>
                                                    </fieldset>
                                                </div>
                                            </div>

                                            <div class="col-3">
                                                <div class="form-label-group position-relative has-icon-left">
                                                    <fieldset class="form-label-group">
                                                        <input type="date" id="last_date" class="form-control" name="last_date" placeholder="ادخل تاريخ النهايه">
                                                        <label for="floating-label1">ادخل تاريخ النهايه</label>
                                                    </fieldset>
                                                </div>
                                            </div>

                                            <div class="col-3">
                                                <button class="btn btn-primary" id="search_by_text_button" type="submit">عرض</button>
                                            </div>
                                        </div>
                                    </div>
                                </form>

                                <div class="table-responsive">
                                    <div id="ajax_responce_serarchDiv">

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

<script>

$(document).ready(function(){

    $(document).on('click','#search_by_text_button',function(e){
        e.preventDefault();
        var payment_type = $('#payment_type').val();
        var begin_date = $('#begin_date').val();
        var last_date = $('#last_date').val();
        var ajax_search_url = $("#ajax_search_url").val();
        var ajax_search_token= $("#ajax_search_token").val();


        jQuery.ajax({
            url:ajax_search_url,
            type:'post',
            dataType:'html',
            cache:false,
            data:{ begin_date:begin_date, last_date:last_date , payment_type:payment_type,"_token":ajax_search_token},
            success:function(data){
                $("#ajax_responce_serarchDiv").html(data);
            },
            error:function(){

            }
        });//end of ajax

    });//end of input

});//end of ready

</script>

@endsection

