<?php

use App\Http\Controllers\Admin\HeaderScriptController;
use App\Http\Controllers\BlogController as ControllersBlogController;
use App\Http\Controllers\DoctorController;
use App\Http\Controllers\OfferController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\WorkController;
use App\Models\Doctor;
use App\Models\Offer;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $offers = Offer::latest()->get();
    return view('welcome', compact('offers'));
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::prefix('admin')->as('admin.')->group(function () {
    Route::resource('blogs', ControllersBlogController::class);
});
// Route::prefix('admin')->middleware(['auth'])->group(function () {

//     Route::get('/blog/create', [ControllersBlogController::class, 'create'])
//         ->name('admin.blog.create');

//     Route::post('/blog/store', [ControllersBlogController::class, 'store'])
//         ->name('admin.blog.store');

//     Route::get('/blogs', [ControllersBlogController::class, 'index'])
//         ->name('admin.blog.index');

//     Route::get('/blog/edit/{id}', [ControllersBlogController::class, 'edit'])
//         ->name('admin.blog.edit');

//     Route::post('/blog/update/{id}', [ControllersBlogController::class, 'update'])
//         ->name('admin.blog.update');
// });
Route::prefix('admin')->name('admin.')->group(function () {
    Route::resource('blog', ControllersBlogController::class);
    // Route::resource('offers', OfferController::class);
});

Route::prefix('admin')->as('admin.')->group(function () {
    Route::resource('offers', OfferController::class);
});
Route::prefix('admin')->as('admin.')->group(function () {
    Route::resource('doctors', DoctorController::class)->except(['show']);
});

Route::view('/dental', 'dental')->name('services.dental');
Route::view('/dermatology', 'dermatology')->name('services.dermatology');
Route::view('/plastic-surgery', 'plastic-surgery')->name('services.plastic-surgery');
Route::get('/doctors', function () {
    $doctors = Doctor::latest()->get();
    return view('doctors', compact('doctors'));
})->name('doctors.index');

// Route::get('/works', function () {
//     // $works = Work::latest()->get();
//     return view('works');
// })->name('works.index');

Route::get('/works', [WorkController::class, 'index'])->name('works.index');

// لوحة التحكم
Route::prefix('admin')->name('admin.')->group(function () {
    Route::get('/works', [WorkController::class, 'adminIndex'])->name('works.index');
    Route::get('/works/create', [WorkController::class, 'create'])->name('works.create');
    Route::post('/works', [WorkController::class, 'store'])->name('works.store');
    Route::delete('/works/{work}', [WorkController::class, 'destroy'])->name('works.destroy');
});

// Policy
Route::view('/policy', 'policy')->name('policy');

Route::get('/blog', [ControllersBlogController::class, 'publicIndex'])->name('blog.index');
Route::get('/blog/{id}', [ControllersBlogController::class, 'publicShow'])->name('blog.show');


Route::get('/decor', function () {
    $works = \App\Models\Work::get();
    return view('decor', compact('works'));
})->name('decor');
// مسار صفحة التصميم الخارجي
Route::view('/exterior', 'exterior')->name('exterior');

// مسار صفحة التصميم الداخلي
Route::view('/interior', 'interior')->name('interior');

// مسار صفحة تجديد/ترميم
Route::view('/renovation', 'renovation')->name('renovation');

Route::middleware(['auth'])->prefix('admin')->name('admin.')->group(function () {
    Route::resource('header-scripts', HeaderScriptController::class)->except(['create', 'show']);
});

require __DIR__ . '/auth.php';
