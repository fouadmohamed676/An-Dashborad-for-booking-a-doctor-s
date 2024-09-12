
@extends('dashboard.user.master')

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
                            <li class="breadcrumb-item active">تعديل
                            </li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <div class="content-body">
        <div class="card">
            <div class="card-header">
                <span class="card-title">تعديل طلب</span>
            </div>
            <br>
            <div class="card-content">
                <div class="card-body">
                    <form class="form" action="{{url('order/save_update/'.$info->id)}}" method="POST">
                        @csrf
                        @method('put')
                        <div class="form-body">
                            <div class="row">
                                 <div class="col-6">
                                    <div class="form-group validate">
                                     
                                            <div class="form-label-group">
                                                <input type="text" id="first-name-floating" class="form-control" placeholder="اسم المريض" disabled value="{{ old('name',$data->name) }}">
                                                <label for="first-name-floating">اسم المريض</label>
                                                @error('name')
                                                <span class="text-danger" id="basic-default-name-error" class="error">
                                                    {{ $message }}
                                                </span>
                                                @enderror
                                        
                                        </div>
                                    </div>
                                </div>
                                 <div class="col-6">
                                    <div class="form-group validate">
                                        <select class="form-control" aria-invalid="false" name="status_id">
                                            <option value="" disabled>-- اختر الحاله --</option>
                                            @foreach($statuses as $status)
                                            <option value="{{$status->id }}" {{$status->id == $info->status_id  ? 'selected' : ''}}>
                                                {{$status->name}}</option>
                                            @endforeach
                                        </select>
                                        @error('status_id')
                                        <span class="text-danger" id="basic-default-name-error" class="error">
                                            {{ $message }}
                                        </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-12">
                                    <button type="submit" class="btn btn-outline-primary  round mr-1 mb-1 waves-effect waves-light">تحديث</button>
                                    <button type="reset" class="btn btn-outline-warning  round mr-1 mb-1 waves-effect waves-light">تفريغ</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>


@endsection

@section('script')

@endsection

