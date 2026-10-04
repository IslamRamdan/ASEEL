@extends('adminlte::page')

@section('content')
    <div class="container-fluid py-4">
        <div class="row">
            {{-- نموذج إضافة سكريبت جديد --}}
            <div class="col-md-5 mb-4">
                <div class="card shadow-sm border-0">
                    <div class="card-header bg-white font-weight-bold">إضافة كود سكريبت جديد (Header)</div>
                    <div class="card-body">
                        @if (session('success'))
                            <div class="alert alert-success">{{ session('success') }}</div>
                        @endif

                        <form action="{{ route('admin.header-scripts.store') }}" method="POST">
                            @csrf
                            <div class="form-group mb-3">
                                <label class="form-label">اسم السكريبت / الخدمة</label>
                                <input type="text" name="name" class="form-control"
                                    placeholder="مثال: TikTok Pixel أو Google Tag" required>
                            </div>

                            <div class="form-group mb-3">
                                <label class="form-label">الكود بالكامل (Script Code)</label>
                                <textarea name="code" rows="7" class="form-control" style="font-family: monospace;"
                                    placeholder="<script>
                                        ...
                                    </script>" required></textarea>
                            </div>

                            <div class="form-check form-switch mb-3">
                                <input class="form-check-input" type="checkbox" name="is_active" id="is_active" checked>
                                <label class="form-check-label" for="is_active">تفعيل الكود على الموقع المباشر</label>
                            </div>

                            <button type="submit" class="btn btn-primary w-100">حفظ السكريبت</button>
                        </form>
                    </div>
                </div>
            </div>

            {{-- جدول عرض الأكواد المحفوظة --}}
            <div class="col-md-7">
                <div class="card shadow-sm border-0">
                    <div class="card-header bg-white font-weight-bold">الأكواد والأدوات المضافة</div>
                    <div class="card-body p-0">
                        <div class="table-responsive">
                            <table class="table table-hover align-middle mb-0">
                                <thead class="table-light">
                                    <tr>
                                        <th>#</th>
                                        <th>اسم الخدمة</th>
                                        <th>الحالة</th>
                                        <th>الإجراءات</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse($scripts as $script)
                                        <tr>
                                            <td>{{ $script->id }}</td>
                                            <td><strong>{{ $script->name }}</strong></td>
                                            <td>
                                                @if ($script->is_active)
                                                    <span class="badge bg-success">مفعل</span>
                                                @else
                                                    <span class="badge bg-secondary">معطل</span>
                                                @endif
                                            </td>
                                            <td>
                                                <div class="d-flex gap-2">
                                                    {{-- زر التعديل المباشر باستخدام Modal --}}
                                                    <a href="{{ route('admin.header-scripts.edit', $script->id) }}"
                                                        class="btn btn-sm btn-outline-primary">
                                                        تعديل
                                                    </a>

                                                    {{-- نموذج الحذف --}}
                                                    <form action="{{ route('admin.header-scripts.destroy', $script->id) }}"
                                                        method="POST"
                                                        onsubmit="return confirm('هل أنت تأكد من حذف هذا السكريبت؟')">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit"
                                                            class="btn btn-sm btn-outline-danger">حذف</button>
                                                    </form>
                                                </div>

                                                {{-- Modal التعديل --}}
                                                <div class="modal fade" id="editModal{{ $script->id }}" tabindex="-1">
                                                    <div class="modal-dialog">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title">تعديل: {{ $script->name }}</h5>
                                                                <button type="button" class="btn-close"
                                                                    data-bs-dismiss="modal"></button>
                                                            </div>
                                                            <form
                                                                action="{{ route('admin.header-scripts.update', $script->id) }}"
                                                                method="POST">
                                                                @csrf
                                                                @method('PUT')
                                                                <div class="modal-body">
                                                                    <div class="form-group mb-3">
                                                                        <label class="form-label">اسم السكريبت</label>
                                                                        <input type="text" name="name"
                                                                            class="form-control" value="{{ $script->name }}"
                                                                            required>
                                                                    </div>

                                                                    <div class="form-group mb-3">
                                                                        <label class="form-label">الكود بالكامل</label>
                                                                        <textarea name="code" rows="7" class="form-control" style="font-family: monospace;" required>{{ $script->code }}</textarea>
                                                                    </div>

                                                                    <div class="form-check form-switch">
                                                                        <input class="form-check-input" type="checkbox"
                                                                            name="is_active"
                                                                            id="edit_active{{ $script->id }}"
                                                                            {{ $script->is_active ? 'checked' : '' }}>
                                                                        <label class="form-check-label"
                                                                            for="edit_active{{ $script->id }}">تفعيل
                                                                            السكريبت</label>
                                                                    </div>
                                                                </div>
                                                                <div class="modal-footer">
                                                                    <button type="button" class="btn btn-secondary"
                                                                        data-bs-dismiss="modal">إلغاء</button>
                                                                    <button type="submit" class="btn btn-primary">حفظ
                                                                        التغييرات</button>
                                                                </div>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>

                                            </td>
                                        </tr>
                                    @empty
                                        <tr>
                                            <td colspan="4" class="text-center p-4 text-muted">لا توجد أية أكواد مضافة
                                                حتى الآن.</td>
                                        </tr>
                                    @endforelse
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
