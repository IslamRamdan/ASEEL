<?php

namespace App\Http\Controllers;

use App\Models\Doctor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class DoctorController extends Controller
{
    public function index()
    {
        $doctors = Doctor::latest()->paginate(10);
        return view('admin.doctors.index', compact('doctors'));
    }

    public function create()
    {
        return view('admin.doctors.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title'       => 'required|string|max:255',
            'image'       => 'required|image|mimes:jpeg,png,jpg,webp|max:2048',
            'description' => 'required|string',
        ]);

        $imagePath = $request->file('image')->store('doctors', 'public');

        Doctor::create([
            'title'       => $request->title,
            'image'       => $imagePath,
            'description' => $request->description,
        ]);

        return redirect()->route('admin.doctors.index')->with('success', 'تم إضافة الطبيب بنجاح');
    }

    public function edit(Doctor $doctor)
    {
        return view('admin.doctors.edit', compact('doctor'));
    }

    public function update(Request $request, Doctor $doctor)
    {
        $request->validate([
            'title'       => 'required|string|max:255',
            'image'       => 'nullable|image|mimes:jpeg,png,jpg,webp|max:2048',
            'description' => 'required|string',
        ]);

        $data = [
            'title'       => $request->title,
            'description' => $request->description,
        ];

        if ($request->hasFile('image')) {
            if ($doctor->image && Storage::disk('public')->exists($doctor->image)) {
                Storage::disk('public')->delete($doctor->image);
            }
            $data['image'] = $request->file('image')->store('doctors', 'public');
        }

        $doctor->update($data);

        return redirect()->route('admin.doctors.index')->with('success', 'تم تعديل بيانات الطبيب بنجاح');
    }

    public function destroy(Doctor $doctor)
    {
        if ($doctor->image && Storage::disk('public')->exists($doctor->image)) {
            Storage::disk('public')->delete($doctor->image);
        }

        $doctor->delete();

        return redirect()->route('admin.doctors.index')->with('success', 'تم حذف الطبيب بنجاح');
    }
}
