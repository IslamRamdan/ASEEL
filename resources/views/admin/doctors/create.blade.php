@extends('adminlte::page')

@section('title', 'إضافة طبيب جديد')

@section('content_header')
    <h1>إضافة طبيب جديد</h1>
@stop

@section('content')
    <div class="row">
        <div class="col-md-8">
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">بيانات الطبيب</h3>
                </div>

                <form action="{{ route('admin.doctors.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="card-body">
                        <div class="form-group">
                            <label for="title">اسم / عنوان الطبيب</label>
                            <input type="text" name="title" class="form-control @error('title') is-invalid @enderror"
                                id="title" value="{{ old('title') }}" placeholder="مثال: د. أحمد محمد - أخصائي الجلدية"
                                required>
                            @error('title')
                                <span class="invalid-feedback">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="description">الوصف</label>
                            <textarea name="description" class="form-control @error('description') is-invalid @enderror" id="description"
                                rows="4" placeholder="أدخل نبذة عن الطبيب وتخصصه..." required>{{ old('description') }}</textarea>
                            @error('description')
                                <span class="invalid-feedback">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="image">صورة الطبيب</label>
                            <div class="custom-file">
                                <input type="file" name="image"
                                    class="custom-file-input @error('image') is-invalid @enderror" id="image"
                                    accept="image/*" required>
                                <label class="custom-file-label" for="image">اختر الصورة...</label>
                            </div>
                            @error('image')
                                <span class="text-danger small d-block mt-1">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="form-group mt-3 d-none" id="preview-container">
                            <label>معاينة الصورة:</label>
                            <div>
                                <img id="image-preview" src="#" alt="Preview" class="img-thumbnail"
                                    style="max-height: 200px;">
                            </div>
                        </div>
                    </div>

                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary">حفظ البيانات</button>
                        <a href="{{ route('admin.doctors.index') }}" class="btn btn-default float-left">إلغاء</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
@stop

@section('js')
    <script>
        document.getElementById('image').addEventListener('change', function(e) {
            const file = e.target.files[0];
            if (file) {
                this.nextElementSibling.innerText = file.name;
                const reader = new FileReader();
                reader.onload = function(e) {
                    document.getElementById('image-preview').src = e.target.result;
                    document.getElementById('preview-container').classList.remove('d-none');
                }
                reader.readAsDataURL(file);
            }
        });
    </script>
@stop
