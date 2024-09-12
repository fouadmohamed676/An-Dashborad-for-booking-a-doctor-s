@if (@isset($data) && !@empty($data) && count($data) > 0)
<div class="row">
    <div class="col-3">
        <h5 style="color: #626262; font-weight: bold;">عدد النتائج : <span style="color: #7367F0;;">{{ $count }}</span></h5>
    </div>
    <div class="col-3">
        <h5 style="color: #626262; font-weight: bold;">عدد الطلبات الداخليه : <span style="color: #7367F0;;">{{ $En }}</span></h5>
    </div>
    <div class="col-3">
        <h5 style="color: #626262; font-weight: bold;">عدد الطلبات الخارجيه : <span style="color: #7367F0;;">{{ $Ex }}</span></h5>
    </div>
    <div class="col-3">
        <h5 style="color: #626262; font-weight: bold;">مجموع الفواتير الكلي : <span style="color: #7367F0;">{{ $total }}</span></h5>
    </div>
</div>
<br>
<table class="table zero-configuration" id="datatable">
    <thead>
        <tr>
            <th>#</th>
            <th>الهاتف</th>
            <th>المنطقة</th>
            <th>المدينة</th>
            <th>الحي</th>
            <th>العنوان</th>
            <th>اجمالي الفاتوره</th>
            <th>طريقة الدفع</th>
            <th>نوع الطلب</th>
            <th>حالة الطلب</th>
            <th>التاريخ</th>
            <th>الوقت</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($data as $index=>$info)
        <tr>
            <td>{{ $index + 1 }}</td>
            <td>{{ $info->phone }}</td>
            <td>{{ $info->customer->city->zone }}</td>
            <td>{{ $info->customer->city->name }}</td>
            <td>{{ $info->neighborhood }}</td>
            <td>{{ $info->address }}</td>
            <td>{{ $info->bill_total }}</td>
            <td> @if($info->payment_type == 1)مدى @elseif($info->payment_type == 2)كاش  @elseif($info->payment_type == 3)تحويل @endif </td>
            <td> @if($info->order_type == 1) داخلي @else خارجي @endif </td>
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
            <td> {{ $info->created_at->format('Y-m-d') }}</td>
            <td> {{ $info->created_at->format('H:m:s') }}</td>
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
