@extends('adminlte::page')

@section('title', 'قائمة الأطباء')

@section('content_header')
    <div class="d-flex justify-content-between align-items-center">
        <h1>قائمة الأطباء</h1>
        <a href="{{ route('admin.doctors.create') }}" class="btn btn-primary">
            <i class="fas fa-plus"></i> إضافة طبيب جديد
        </a>
    </div>
@stop

@section('content')
    @if (session('success'))
        <div class="alert alert-success alert-dismissible fade show">
            {{ session('success') }}
            <button type="button" class="close" data-dismiss="alert"><span>&times;</span></button>
        </div>
    @endif

    <div class="card">
        <div class="card-body p-0">
            <table class="table table-striped table-hover align-middle mb-0">
                <thead>
                    <tr>
                        <th style="width: 60px">#</th>
                        <th style="width: 100px">الصورة</th>
                        <th>العنوان / الاسم</th>
                        <th>الوصف</th>
                        <th style="width: 150px">تاريخ الإضافة</th>
                        <th style="width: 140px" class="text-center">الاجراءات</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($doctors as $doctor)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>
                                <img src="{{ asset('storage/' . $doctor->image) }}" alt="{{ $doctor->title }}"
                                    class="img-thumbnail" style="height: 50px; width: 50px; object-fit: cover;">
                            </td>
                            <td>{{ $doctor->title }}</td>
                            <td>{{ Str::limit($doctor->description, 60) }}</td>
                            <td>{{ $doctor->created_at->format('Y-m-d') }}</td>
                            <td class="text-center">
                                <a href="{{ route('admin.doctors.edit', $doctor->id) }}"
                                    class="btn btn-warning btn-sm text-white">
                                    <i class="fas fa-edit"></i>
                                </a>
                                <form action="{{ route('admin.doctors.destroy', $doctor->id) }}" method="POST"
                                    class="d-inline-block" onsubmit="return confirm('هل أنت تأكد من عملية الحذف؟')">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm">
                                        <i class="fas fa-trash"></i>
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="6" class="text-center text-muted py-4">لا يوجد أطباء مضافين حالياً.</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
        @if ($doctors->hasPages())
            <div class="card-footer clearfix">
                {{ $doctors->links() }}
            </div>
        @endif
    </div>
@stop
