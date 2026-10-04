@extends('adminlte::page')

@section('title', 'إضافة عمل جديد')

@section('content_header')
    <h1>إضافة عمل جديد</h1>
@stop

@section('content')
    <div class="row">
        <div class="col-md-8 offset-md-2">
            <div class="card card-primary card-outline">
                <div class="card-header">
                    <h3 class="card-title">بيانات العمل</h3>
                </div>

                <form action="{{ route('admin.works.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="card-body">

                        @if ($errors->any())
                            <div class="alert alert-danger alert-dismissible">
                                <button type="button" class="close" data-dismiss="alert"
                                    aria-hidden="true">&times;</button>
                                <h5><i class="icon fas fa-ban"></i> خطأ في البيانات!</h5>
                                <ul class="mb-0 pl-3">
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                        <div class="form-group">
                            <label for="title">العنوان (اختياري)</label>
                            <input type="text" name="title" id="title" class="form-control"
                                placeholder="أدخل عنوان أو وصف للعمل" value="{{ old('title') }}">
                        </div>

                        <div class="form-group">
                            <label for="file">الملف (صورة) <span class="text-danger">*</span></label>
                            <div class="input-group">
                                <div class="custom-file">
                                    <input type="file" name="file" class="custom-file-input" id="file" required>
                                    <label class="custom-file-label" for="file" data-browse="اختر">اختر الملف...</label>
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="card-footer d-flex justify-content-between">
                        <a href="{{ route('admin.works.index') }}" class="btn btn-default">إلغاء</a>
                        <button type="submit" class="btn btn-primary">
                            <i class="fas fa-save ml-1"></i> حفظ العمل
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@stop

@section('js')
    <script>
        // إظهار اسم الملف المختار داخل Custom File Input الخاص بـ AdminLTE
        $('.custom-file-input').on('change', function() {
            let fileName = $(this).val().split('\\').pop();
            $(this).next('.custom-file-label').addClass("selected").html(fileName);
        });
    </script>
@stop
