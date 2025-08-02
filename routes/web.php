<?php

use App\Http\Controllers\WebsiteController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\informasicontroller;
use Illuminate\Support\Facades\Route;

use Illuminate\Http\Request;
use App\Models\Informasi;

Route::get('/upload-info', function () {
    return view('upload-info'); // panggil 1 file blade saja
});

Route::post('/upload-info', function (Request $request) {
    $validated = $request->validate([
        'judul' => 'required',
        'deskripsi' => 'required',
    ]);

    Informasi::create($validated);

    return back()->with('success', 'Data berhasil disimpan');
});

Route::get('/', function () {
     return redirect('/beranda');
});

Route::get('/pr', function () {
    return view('perco');
});

Route::get('/joging', function () {
    return view('test');
});


Route::get('/profil_p', function () {
    return view('profil.profil');
});

Route::get('/profile_p2', function () {
    return view('profil.profile2');
});

Route::get('/profile_p3', function () {
    return view('profil.profile3');
});

Route::get('/profile_p4', function () {
    return view('profil.profile4');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/admin/website', function () {
    return view('admin.website');
})->middleware(['auth', 'verified'])->name('admin.website');

Route::get('/admin/informasi', function () {
    return view('admin.informasi');
})->middleware(['auth', 'verified'])->name('admin.informasi');

Route::get('/informasi/{id}', [informasicontroller::class, 'show'])->name('informasi.show');
// {{---crud route---}}
Route::get('/admin/website', [\App\Http\Controllers\Websitecontroller::class, 'admin'])->name('admin.website');
Route::post('/admin/website', [\App\Http\Controllers\Websitecontroller::class, 'store'])->name('admin.website.store');
Route::get('/admin/website/{id}/edit', [\App\Http\Controllers\Websitecontroller::class, 'edit'])->name('admin.website.edit');
Route::put('/admin/website/{id}', [\App\Http\Controllers\Websitecontroller::class, 'update'])->name('admin.website.update');
Route::delete('/admin/website/{id}', [\App\Http\Controllers\Websitecontroller::class, 'destroy'])->name('admin.website.destroy');

Route::get('/admin/informasi', [\App\Http\Controllers\InformasiController::class, 'admin'])->name('admin.informasi');
Route::post('/admin/informasi', [\App\Http\Controllers\InformasiController::class, 'store'])->name('admin.informasi.store');
Route::get('/admin/informasi/{id}/edit', [\App\Http\Controllers\InformasiController::class, 'edit'])->name('admin.informasi.edit');
Route::put('/admin/informasi/{id}/update', [\App\Http\Controllers\InformasiController::class, 'update'])->name('admin.informasi.update');
Route::delete('/admin/informasi/{id}/delete', [\App\Http\Controllers\InformasiController::class, 'destroy'])->name('admin.informasi.delete');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
// {{---beranda route---}}
Route::get('/tambah', function () {
    $informasi = 'Data dari route langsung';
    return view('informasi', compact('informasi'));
});
Route::get('/beranda', function () {
    return view('beranda.beranda');
});
Route::get('/beranda', [InformasiController::class, 'beranda'])->name('informasi.beranda');

Route::get('/daftar', [WebsiteController::class, 'daftar'])->name('daftar.website');

Route::get('/informasi', [InformasiController::class, 'informasi'])->name('informasi.website');

Route::get('/project', function () {
    return view('beranda.project');
});

Route::get('/tentang', function () {
    return view('beranda.tentang');
});

Route::get('/team', function () {
    return view('beranda.team');
});

// {{---detail route---}}

Route::get('/detail_sikemas', function () {
    return view('detail.sikemas');
});

Route::get('/detail_simpeg', function () {
    return view('detail.simpeg');
});

Route::get('/detail_simutu', function () {
    return view('detail.simutu');
});


require __DIR__.'/auth.php';
