<?php

namespace App\Http\Controllers;

use App\Models\Offer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class OfferController extends Controller
{
    public function index()
    {
        $offers = Offer::latest()->paginate(10);
        return view('admin.offers.index', compact('offers'));
    }

    public function create()
    {
        return view('admin.offers.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'image' => 'required|image|mimes:jpeg,png,jpg,webp|max:2048',
        ]);

        $imagePath = $request->file('image')->store('offers', 'public');

        Offer::create([
            'title' => $request->title,
            'image' => $imagePath,
        ]);

        return redirect()->route('admin.offers.index')->with('success', 'تم إضافة العرض بنجاح');
    }

    public function destroy(Offer $offer)
    {
        if ($offer->image && Storage::disk('public')->exists($offer->image)) {
            Storage::disk('public')->delete($offer->image);
        }

        $offer->delete();

        return redirect()->route('admin.offers.index')->with('success', 'تم حذف العرض بنجاح');
    }
}
