<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\HeaderScript;
use Illuminate\Http\Request;

class HeaderScriptController extends Controller
{
    public function index()
    {
        $scripts = HeaderScript::latest()->get();
        return view('admin.header_scripts.index', compact('scripts'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'code' => 'required|string',
        ]);

        HeaderScript::create([
            'name'      => $request->name,
            'code'      => $request->code,
            'is_active' => $request->has('is_active'),
        ]);

        return redirect()->route('admin.header-scripts.index')->with('success', 'تم إضافة السكريبت بنجاح!');
    }

    // دالة فتح صفحة التعديل
    public function edit($id)
    {
        $script = HeaderScript::findOrFail($id);
        return view('admin.header_scripts.edit', compact('script'));
    }

    // دالة الحفظ بعد التعديل
    public function update(Request $request, $id)
    {
        $script = HeaderScript::findOrFail($id);

        $request->validate([
            'name' => 'required|string|max:255',
            'code' => 'required|string',
        ]);

        $script->update([
            'name'      => $request->name,
            'code'      => $request->code,
            'is_active' => $request->has('is_active'),
        ]);

        return redirect()->route('admin.header-scripts.index')->with('success', 'تم تحديث السكريبت بنجاح!');
    }

    public function destroy($id)
    {
        $script = HeaderScript::findOrFail($id);
        $script->delete();

        return redirect()->route('admin.header-scripts.index')->with('success', 'تم حذف السكريبت بنجاح!');
    }
}
