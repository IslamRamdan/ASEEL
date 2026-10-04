@extends('adminlte::page')

@section('content')
    <div class="container-fluid py-4">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card shadow-sm border-0">
                    <div class="card-header bg-white font-weight-bold d-flex justify-content-between align-items-center">
                        <span>تعديل السكريبت: {{ $script->name }}</span>
                        <a href="{{ route('admin.header-scripts.index') }}" class="btn btn-sm btn-outline-secondary">رجوع
                            للقائمة</a>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('admin.header-scripts.update', $script->id) }}" method="POST">
                            @csrf
                            @method('PUT')

                            <div class="form-group mb-3">
                                <label class="form-label">اسم السكريبت / الخدمة</label>
                                <input type="text" name="name" class="form-control"
                                    value="{{ old('name', $script->name) }}" required>
                            </div>

                            <div class="form-group mb-3">
                                <label class="form-label">الكود بالكامل (Script Code)</label>
                                <textarea name="code" rows="10" class="form-control" style="font-family: monospace;" required>{{ old('code', $script->code) }}</textarea>
                            </div>

                            <div class="form-check form-switch mb-3">
                                <input class="form-check-input" type="checkbox" name="is_active" id="is_active"
                                    {{ $script->is_active ? 'checked' : '' }}>
                                <label class="form-check-label" for="is_active">تفعيل الكود على الموقع</label>
                            </div>

                            <button type="submit" class="btn btn-primary w-100">حفظ التغييرات</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
