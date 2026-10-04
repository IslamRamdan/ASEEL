@extends('adminlte::page')

@section('title', 'إضافة مقال جديد')

@section('content_header')
    <h1>إضافة مقال جديد</h1>
@stop

@section('content')
    <div class="row">
        <div class="col-md-10">
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">بيانات المقال</h3>
                </div>

                <form action="{{ route('admin.blogs.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6 form-group">
                                <label for="title">عنوان المقال</label>
                                <input type="text" name="title"
                                    class="form-control @error('title') is-invalid @enderror" id="title"
                                    value="{{ old('title') }}" placeholder="أدخل عنوان المقال" required>
                                @error('title')
                                    <span class="invalid-feedback">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="col-md-6 form-group">
                                <label for="category">التصنيف</label>
                                <select name="category" id="category"
                                    class="form-control select2 @error('category') is-invalid @enderror" required>
                                    <option value="" disabled {{ old('category') ? '' : 'selected' }}>اختر التصنيف...
                                    </option>
                                    <option value="العناية بالبشرة"
                                        {{ old('category') == 'العناية بالبشرة' ? 'selected' : '' }}>العناية بالبشرة
                                    </option>
                                    <option value="الليزر" {{ old('category') == 'الليزر' ? 'selected' : '' }}>الليزر
                                    </option>
                                    <option value="الشعر" {{ old('category') == 'الشعر' ? 'selected' : '' }}>الشعر</option>
                                    <option value="الاسنان" {{ old('category') == 'الاسنان' ? 'selected' : '' }}>الاسنان
                                    </option>
                                    <option value="التجميل" {{ old('category') == 'التجميل' ? 'selected' : '' }}>التجميل
                                    </option>
                                </select>
                                @error('category')
                                    <span class="invalid-feedback">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="description">محتوى / وصف المقال</label>
                            <textarea name="description" class="form-control @error('description') is-invalid @enderror" id="description"
                                rows="6" placeholder="أدخل نص المقال...">{{ old('description') }}</textarea>
                            @error('description')
                                <span class="invalid-feedback d-block">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="image">صورة المقال</label>
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
                        <button type="submit" class="btn btn-primary">حفظ ونشر المقال</button>
                        <a href="{{ route('admin.blogs.index') }}" class="btn btn-default float-left">إلغاء</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
@stop

@section('css')
    <!-- Summernote CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.20/summernote-bs4.min.css">
    <style>

    </style>
@stop

@section('js')
    <!-- Summernote JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.20/summernote-bs4.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#description').summernote({
                placeholder: 'أدخل نص المقال هنا...',
                tabsize: 2,
                height: 250,
                direction: 'rtl',
                lang: 'ar-AR',
                toolbar: [
                    ['style', ['style', 'bold', 'italic', 'underline', 'clear']],
                    ['font', ['strikethrough', 'superscript', 'subscript']],
                    ['color', ['color']],
                    ['para', ['ul', 'ol', 'paragraph']],
                    ['table', ['table']],
                    ['insert', ['link', 'picture', 'video']],
                    ['view', ['fullscreen', 'codeview', 'help']]
                ]
            });
        });
    </script>
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
