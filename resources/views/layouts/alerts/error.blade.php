@if(Session::has('error'))
    <div class="alert alert-danger" role="alert">
        <h4 class="alert-heading">{{ trans('site_trans.Error') }}</h4>
        <p class="mb-0">
            {{  Session::get('error') }}
        </p>
    </div>
@endif

