<!-- Modal create -->
<div class="modal fade text-left" id="default" tabindex="-1" role="dialog" aria-labelledby="myModalLabel1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="myModalLabel1">اضافة</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form class="form" action="{{ route('patient.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-body">
                        <div class="row">
                            <div class="col-12">
                                <div class="form-label-group">
                                    <input type="text" class="form-control" required autofocus placeholder="ألاسم" name="name" value="{{ old('name') }}">
                                    <label for="first-name-floating">ألاسم</label>
                                    @error('name')
                                    <span class="text-danger" id="basic-default-name-error" class="error">
                                        {{ $message }}
                                    </span>
                                    @enderror
                                </div>
                                <div class="form-label-group">
                                    <input type="text" class="form-control" required autofocus placeholder="السكن" name="title" value="{{ old('title') }}">
                                    <label for="first-name-floating">السكن</label>
                                    @error('title')
                                    <span class="text-danger" id="basic-default-name-error" class="error">
                                        {{ $message }}
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-label-group">
                                    <input type="text" class="form-control" required autofocus placeholder="E-mail" name="email" value="{{ old('email') }}">
                                    <label for="first-name-floating">E-mail</label>
                                    @error('email')
                                    <span class="text-danger" id="basic-default-name-error" class="error">
                                        {{ $message }}
                                    </span>
                                    @enderror
                                </div>
                                <div class="form-label-group">
                                    <input type="number" class="form-control" required autofocus placeholder="Phone" name="phone" value="{{ old('phone') }}">
                                    <label for="first-name-floating">Phone</label>
                                    @error('name')
                                    <span class="text-danger" id="basic-default-name-error" class="error">
                                        {{ $message }}
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-label-group">
                                    <input type="password" class="form-control" required autofocus placeholder="password" name="password" value="{{ old('password') }}">
                                    <label for="first-name-floating">Password</label>
                                    @error('password')
                                    <span class="text-danger" id="basic-default-name-error" class="error">
                                        {{ $message }}
                                    </span>
                                    @enderror
                                </div>
                                <div class="form-label-group">
                                    <input type="date" required autofocus class="form-control" placeholder="Barth Date" name="barth_date" value="{{ old('barth_date') }}">
                                    <label for="first-name-floating">Barth-Date</label>
                                    @error('barth_date')
                                    <span class="text-danger" id="basic-default-name-error" class="error">
                                        {{ $message }}
                                    </span>
                                    @enderror
                                </div>
                            </div>
 

                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-outline-primary btn-sm round mr-1 mb-1 waves-effect waves-light">اضافه</button>
                    <button type="reset" class="btn btn-outline-warning btn-sm round mr-1 mb-1 waves-effect waves-light">تفريغ</button>
                </div>
            </form>
        </div>
    </div>
</div>
<!--end Model-->
