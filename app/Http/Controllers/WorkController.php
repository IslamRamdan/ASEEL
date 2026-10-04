<?php

namespace App\Http\Controllers;

use App\Models\Work;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class WorkController extends Controller
{
    // عرض المعرض في الواجهة الأمامية
    public function index()
    {
        $works = Work::latest()->get();

        return view('works', compact('works'));
    }

    // صفحة لوحة التحكم (إدارة الأعمال)
    public function adminIndex()
    {
        $works = Work::latest()->get();
        return view('admin.works.index', compact('works'));
    }

    // صفحة إضافة عمل جديد
    public function create()
    {
        $categories = Work::$categories;
        return view('admin.works.create', compact('categories'));
    }

    // حفظ العمل في قاعدة البيانات
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'nullable|string|max:255',
            'file' => 'required|file|mimes:jpeg,png,jpg,webp,mp4,mov,avi', // 20MB Max
        ]);

        $filePath = $request->file('file')->store('works', 'public');

        Work::create([
            'title' => $request->title,
            'file_path' => $filePath,
        ]);

        return redirect()->route('admin.works.index')->with('success', 'تم إضافة العمل بنجاح.');
    }

    // حذف عمل
    public function destroy(Work $work)
    {
        if (Storage::disk('public')->exists($work->file_path)) {
            Storage::disk('public')->delete($work->file_path);
        }

        $work->delete();

        return redirect()->route('admin.works.index')->with('success', 'تم حذف العمل بنجاح.');
    }
}
