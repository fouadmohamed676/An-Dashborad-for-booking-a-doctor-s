@if(Session::has('success'))
<div class="alert alert-success" role="alert">
    <h4 class="alert-heading">{{ trans('site_trans.Success') }}</h4>
    <p class="mb-0">
        {{  Session::get('success') }}
    </p>
</div>
@endif
