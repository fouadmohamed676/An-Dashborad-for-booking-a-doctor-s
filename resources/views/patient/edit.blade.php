<!-- Modal Edit -->
<div class="modal fade text-left" id="modal_Edit{{ $info->id }}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="myModalLabel1">تعديل بيانات</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form class="form" action="{{ route('patient.update',$info->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-body">
                        <div class="row">
                            <div class="col-12">
                                <div class="form-label-group">
                                    <input type="text" class="form-control" placeholder="الاسم" name="name" value="{{ old('name',$info->name) }}">
                                    <label for="first-name-floating">الاسم</label>
                                    @error('name')
                                    <span class="text-danger" id="basic-default-name-error" class="error">
                                        {{ $message }}
                                    </span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <div class="form-label-group">
                                    <input type="email" class="form-control" placeholder="E-mail" name="email" value="{{ old('name',$info->email) }}">
                                    <label for="first-name-floating">E-mail</label>
                                    @error('email')
                                    <span class="text-danger" id="basic-default-name-error" class="error">
                                        {{ $message }}
                                    </span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <div class="form-label-group">
                                    <input type="number" class="form-control" placeholder="الهاتف" name="phone" value="{{ old('name',$info->phone) }}">
                                    <label for="first-name-floating">الهاتف</label>
                                    @error('phone')
                                    <span class="text-danger" id="basic-default-name-error" class="error">
                                        {{ $message }}
                                    </span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="row">
                     
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <div class="form-label-group">
                                    <input type="text" class="form-control" placeholder="السكن" name="title" value="{{ old('name',$info->title) }}">
                                    <label for="first-name-floating">السكن</label>
                                    @error('tilte')
                                    <span class="text-danger" id="basic-default-name-error" class="error">
                                        {{ $message }}
                                    </span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                         
                        <div class="row">
                            <div class="col-12">
                                <div class="form-label-group">
                                    <input type="date" class="form-control" placeholder="تاريخ الميلاد" name="barth_date" value="{{ old('name',$info->barth_date) }}">
                                    <label for="first-name-floating">تاريخ الميلاد</label>
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
                    <button type="submit" class="btn btn-outline-primary btn-sm round mr-1 mb-1 waves-effect waves-light">تحديث</button>
                    <button type="reset" class="btn btn-outline-warning btn-sm round mr-1 mb-1 waves-effect waves-light">تفريغ</button>
                </div>
            </form>
        </div>
    </div>
</div>
<!--end Model-->
