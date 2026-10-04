@extends('adminlte::page')

@section('title', 'إدارة الأعمال')

@section('content_header')
    <div class="d-flex justify-content-between align-items-center">
        <h1>معرض الأعمال</h1>
        <a href="{{ route('admin.works.create') }}" class="btn btn-primary">
            <i class="fas fa-plus ml-1"></i> إضافة عمل جديد
        </a>
    </div>
@stop

@section('content')
    @if (session('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <i class="icon fas fa-check"></i> {{ session('success') }}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    @endif

    <div class="card card-outline card-primary">
        <div class="card-header">
            <h3 class="card-title">قائمة الأعمال المضافة</h3>
        </div>
        <div class="card-body p-0">
            <div class="table-responsive">
                <table class="table table-striped table-hover align-middle mb-0">
                    <thead>
                        <tr>
                            <th style="width: 80px;">#</th>
                            <th style="width: 120px;">المعاينة</th>
                            <th>العنوان</th>
                            <th>تاريخ الإضافة</th>
                            <th style="width: 100px;">الإجراءات</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($works as $work)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>
                                    @if (Str::startsWith($work->file_path, 'works/') && Str::endsWith($work->file_path, ['.mp4', '.mov', '.avi']))
                                        <video width="100" height="60" controls>
                                            <source src="{{ asset('storage/' . $work->file_path) }}" type="video/mp4">
                                            Your browser does not support the video tag.
                                        </video>
                                    @else
                                        <img src="{{ asset('storage/' . $work->file_path) }}" alt="معاينة العمل"
                                            class="img-thumbnail" style="width: 100px; height: 60px; object-fit: cover;">
                                    @endif

                                <td>{{ $work->title ?? '—' }}</td>
                                <td>{{ $work->created_at->format('Y-m-d') }}</td>
                                <td>
                                    <form action="{{ route('admin.works.destroy', $work) }}" method="POST"
                                        onsubmit="return confirm('هل أنت تأكد من عملية الحذف؟');">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-sm btn-danger" data-toggle="tooltip"
                                            title="حذف">
                                            <i class="fas fa-trash"></i>
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="7" class="text-center py-4 text-muted">لا توجد أعمال مضافة حالياً.</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@stop
