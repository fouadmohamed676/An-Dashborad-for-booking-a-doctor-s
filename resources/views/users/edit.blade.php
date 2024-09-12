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
                <span class="card-title">تعديل بيانات مستخدم</span>
            </div>
            <br>
            <div class="card-content">
                <div class="card-body">
                    
                    
                    <form class="form" action="{{ route('users.update',$info->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <!-- for valdations-->
                        <input type="hidden" name="id" value="{{ $info->id }}">

                        <div class="form-body">
                            <div class="row">
                                <div class="col-6">
                                    <div class="form-label-group">
                                        <input type="text" id="first-name-floating" class="form-control" placeholder="الاسم" name="name" value="{{ old('name',$info->name) }}">
                                        <label for="first-name-floating">الاسم</label>
                                        @error('name')
                                        <span class="text-danger" id="basic-default-name-error" class="error">
                                            {{ $message }}
                                        </span>
                                        @enderror
                                    </div>
                                </div>
                                 
                                <div class="col-6">
                                    <div class="form-label-group">
                                        <input type="text" id="first-name-floating" class="form-control" placeholder="الهاتف" name="phone" value="{{ old('phone',$info->phone) }}">
                                        <label for="first-name-floating">الهاتف</label>
                                        @error('phone')
                                        <span class="text-danger" id="basic-default-name-error" class="error">
                                            {{ $message }}
                                        </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="form-label-group">
                                        <input type="text" id="first-name-floating" class="form-control" placeholder="E-mail" name="email" value="{{ old('email',$info->email) }}">
                                        <label for="first-name-floating">E-mail</label>
                                        @error('email')
                                        <span class="text-danger" id="basic-default-name-error" class="error">
                                            {{ $message }}
                                        </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="form-group validate">
                                        <select class="form-control" aria-invalid="false" name="gender_id">
                                            <option value="{{$info->gender_id}}" disabled>-- اختر النوع --</option>
                                            @foreach ($genders as $gender)
                                                <option value="{{ $gender->id }}" {{ $info->gender_id == $gender->id ? 'selected' : '' }}>{{ $gender->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="form-group validate">
                                        <select class="form-control" aria-invalid="false" name="service_id">
                                            <option value="" disabled>-- اختر الخدمه --</option>
                                            @foreach ($services as $service)
                                                <option value="{{ $service->id }}" {{ $info->service_id == $service->id ? 'selected' : '' }}>{{ $service->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            
                                
                                <div class="col-6">
                                    <div class="form-label-group">
                                        <input type="text" id="first-name-floating" class="form-control" placeholder="العنوان" name="title" value="{{ old('title',$info->title) }}">
                                        <label for="first-name-floating">العنوان</label>
                                        @error('title')
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

