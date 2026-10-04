<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class BlogController extends Controller
{
    // عرض لوحة التحكم
    public function index()
    {
        $blogs = Blog::latest()->paginate(10);
        return view('admin.blogs.index', compact('blogs'));
    }

    public function create()
    {
        return view('admin.blogs.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title'       => 'required|string|max:255',
            'category'    => 'required|string|max:255',
            'image'       => 'required|image|mimes:jpeg,png,jpg,webp|max:2048',
            'description' => 'required|string',
        ]);

        $imagePath = $request->file('image')->store('blogs', 'public');

        Blog::create([
            'title'       => $request->title,
            'category'    => $request->category,
            'image'       => $imagePath,
            'description' => $request->description,
        ]);

        return redirect()->route('admin.blogs.index')->with('success', 'تم إضافة المقال بنجاح');
    }

    public function edit(Blog $blog)
    {
        return view('admin.blogs.edit', compact('blog'));
    }

    public function update(Request $request, Blog $blog)
    {
        $request->validate([
            'title'       => 'required|string|max:255',
            'category'    => 'required|string|max:255',
            'image'       => 'nullable|image|mimes:jpeg,png,jpg,webp|max:2048',
            'description' => 'required|string',
        ]);

        $data = [
            'title'       => $request->title,
            'category'    => $request->category,
            'description' => $request->description,
        ];

        if ($request->hasFile('image')) {
            if ($blog->image && Storage::disk('public')->exists($blog->image)) {
                Storage::disk('public')->delete($blog->image);
            }
            $data['image'] = $request->file('image')->store('blogs', 'public');
        }

        $blog->update($data);

        return redirect()->route('admin.blogs.index')->with('success', 'تم تعديل المقال بنجاح');
    }

    public function destroy(Blog $blog)
    {
        if ($blog->image && Storage::disk('public')->exists($blog->image)) {
            Storage::disk('public')->delete($blog->image);
        }

        $blog->delete();

        return redirect()->route('admin.blogs.index')->with('success', 'تم حذف المقال بنجاح');
    }

    // عرض المقالات للموقع العام
    public function publicIndex()
    {
        $blogs = Blog::latest()->paginate(9);
        $categories = Blog::select('category')->distinct()->pluck('category');
        return view('mdwna', compact('blogs', 'categories'));
    }

    public function publicShow($blog)
    {
        $blog = Blog::findOrFail($blog);

        $categories = Blog::select('category')->distinct()->pluck('category');

        $relatedBlogs = Blog::where('id', '!=', $blog->id)
            ->where('category', $blog->category)
            ->latest()
            ->take(3)
            ->get();

        if ($relatedBlogs->count() < 3) {
            $extra = Blog::where('id', '!=', $blog->id)
                ->whereNotIn('id', $relatedBlogs->pluck('id'))
                ->latest()
                ->take(3 - $relatedBlogs->count())
                ->get();

            $relatedBlogs = $relatedBlogs->merge($extra);
        }
        // $blog = Blog::findOrFail($blog);
        // return $blog;

        return view('admin.blogs.show', compact('blog', 'relatedBlogs', 'categories'));
    }
}
