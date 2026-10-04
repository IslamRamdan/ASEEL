@extends('adminlte::page')

@section('title', 'قائمة العروض')

@section('content_header')
    <div class="d-flex justify-content-between align-items-center">
        <h1>قائمة العروض</h1>
        <a href="{{ route('admin.offers.create') }}" class="btn btn-primary">
            <i class="fas fa-plus"></i> إضافة عرض جديد
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
                        <th style="width: 80px">#</th>
                        <th style="width: 120px">الصورة</th>
                        <th>العنوان</th>
                        <th style="width: 150px">تاريخ الإضافة</th>
                        <th style="width: 100px" class="text-center">الاجراءات</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($offers as $offer)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>
                                <img src="{{ asset('storage/' . $offer->image) }}" alt="{{ $offer->title }}"
                                    class="img-thumbnail" style="height: 50px; object-fit: cover;">
                            </td>
                            <td>{{ $offer->title }}</td>
                            <td>{{ $offer->created_at->format('Y-m-d') }}</td>
                            <td class="text-center">
                                <form action="{{ route('admin.offers.destroy', $offer->id) }}" method="POST"
                                    onsubmit="return confirm('هل أنت تأكد من عملية الحذف؟')">
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
                            <td colspan="5" class="text-center text-muted py-4">لا توجد عروض مضافة حالياً.</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
        @if ($offers->hasPages())
            <div class="card-footer clearfix">
                {{ $offers->links() }}
            </div>
        @endif
    </div>
@stop
