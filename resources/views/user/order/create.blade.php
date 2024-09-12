
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
                            <li class="breadcrumb-item active">اضافه
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
                <span class="card-title">اضافه طلب</span>
            </div>
            <br>
            <div class="card-content">
                <div class="card-body">
                    <form class="form" action="{{ route('user.orders.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-body">
                            <div class="row">
                                {{-- <div class="col-6">
                                    <div class="form-group validate">
                                        <select class="form-control" aria-invalid="false" name="representative_id">
                                            <option value="" disabled selected>-- اختر المندوب --</option>
                                            @foreach ($representatives as $representative)
                                                <option value="{{ $representative->id }}" {{ old('representative_id') == $representative->id ? 'selected' : '' }}>{{ $representative->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div> --}}
                                <div class="col-6">
                                    <div class="form-label-group">
                                        <input type="number" step="0.01" id="first-name-floating" class="form-control" placeholder="اجمالي الفاتورة" name="bill_total" value="{{ old('bill_total') }}">
                                        <label for="first-name-floating">اجمالي الفاتورة</label>
                                        @error('bill_total')
                                        <span class="text-danger" id="basic-default-name-error" class="error">
                                            {{ $message }}
                                        </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-6">
                                    <fieldset class="form-label-group form-group position-relative has-icon-left">
                                        <input type="number" class="form-control" id="iconLabelLeft" placeholder="رقم الهاتف مثل (5xxxxxxxx)"  name="phone" value="{{ old('phone') }}">
                                        <div class="form-control-position">
                                            <i class="feather icon-phone"></i>
                                        </div>
                                        <label for="iconLabelLeft">رقم الهاتف مثل (5xxxxxxxx)</label>
                                        @error('phone')
                                        <span class="text-danger" id="basic-default-name-error" class="error">
                                            {{ $message }}
                                        </span>
                                        @enderror
                                    </fieldset>
                                </div>
                                <div class="col-6">
                                    <div class="form-label-group">
                                        <input type="text" id="first-name-floating" class="form-control" placeholder="الحي" name="neighborhood" value="{{ old('neighborhood') }}">
                                        <label for="first-name-floating">الحي</label>
                                        @error('neighborhood')
                                        <span class="text-danger" id="basic-default-name-error" class="error">
                                            {{ $message }}
                                        </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-6">
                                    <fieldset class="form-label-group">
                                        <textarea class="form-control" id="label-textarea" rows="3" placeholder="العنوان" name="address">{{ old('address') }}</textarea>
                                        <label for="label-textarea">العنوان</label>
                                        @error('address')
                                        <span class="text-danger" id="basic-default-name-error" class="error">
                                            {{ $message }}
                                        </span>
                                        @enderror
                                    </fieldset>
                                </div>
                                <div class="col-6">
                                    <div class="form-group validate">
                                        <select class="form-control" aria-invalid="false" name="order_type">
                                            <option value="" disabled>-- اختر نوع الطلب --</option>
                                            <option value="1" {{ old('order_type') == 1 ? 'selected' : '' }}>داخلي</option>
                                            <option value="2" {{ old('order_type') == 2 ? 'selected' : '' }}>خارجي</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="form-group validate">
                                        <select class="form-control" aria-invalid="false" name="payment_type">
                                            <option value="" disabled>-- اختر طريقة الدفع--</option>
                                            <option value="1" {{ old('payment_type') == 1 ? 'selected' : '' }}>مدى - mada</option>
                                            <option value="2" {{ old('payment_type') == 2 ? 'selected' : '' }}>كاش - kash</option>
                                            <option value="3" {{ old('payment_type') == 3 ? 'selected' : '' }}>تحويل - transformation</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-12">
                                    <button type="submit" class="btn btn-outline-primary  round mr-1 mb-1 waves-effect waves-light">اضافه</button>
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

