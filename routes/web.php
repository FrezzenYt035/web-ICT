<?php

use App\Http\Controllers\WebsiteController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\informasicontroller;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\TentangKamiController;
use App\Http\Controllers\TeamController;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Models\Informasi;


    Route::get('/', function () {
        return redirect('/beranda');
    });


            //{{-- admin route --}}
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->middleware(['auth', 'verified'])->name('dashboard');

    Route::get('/admin/website', function () {
        return view('admin.website');
    })->middleware(['auth', 'verified'])->name('admin.website');

    Route::get('/admin/informasi', function () {
        return view('admin.informasi');
    })->middleware(['auth', 'verified'])->name('admin.informasi');

    Route::get('/admin/team', function () {
        return view('admin.team');
    })->middleware(['auth', 'verified'])->name('admin.team');

      Route::get('/admin/proyek', function () {
        return view('admin.project');
    })->middleware(['auth', 'verified'])->name('admin.project');


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

    Route::get('/project', [ProjectController::class, 'index'])->name('project.index');

    Route::get('/tentang', [TentangKamiController::class, 'tentang'])->name('tentang');


    Route::get('/team', [TeamController::class, 'index'])->name('team.index');


    // {{---crud route---}}
    Route::get('/admin/website', [\App\Http\Controllers\Websitecontroller::class, 'admin'])->name('admin.website');
    Route::post('/admin/website', [\App\Http\Controllers\Websitecontroller::class, 'store'])->name('admin.website.store');
    Route::get('/admin/website/{id}/edit', [\App\Http\Controllers\Websitecontroller::class, 'edit'])->name('admin.website.edit');
    Route::put('/admin/website/{id}', [\App\Http\Controllers\Websitecontroller::class, 'update'])->name('admin.website.update');
    Route::delete('/admin/website/{id}', [\App\Http\Controllers\Websitecontroller::class, 'destroy'])->name('admin.website.destroy');

    Route::get('/admin/informasi', [\App\Http\Controllers\InformasiController::class, 'admin'])->name('admin.informasi');
    Route::post('/admin/informasi', [\App\Http\Controllers\InformasiController::class, 'store'])->name('admin.informasi.store');
    Route::get('/informasi/{informasi}', [InformasiController::class, 'show'])->name('informasi.show');
    Route::get('/admin/informasi/{slug}/edit', [\App\Http\Controllers\InformasiController::class, 'edit'])->name('admin.informasi.edit');
    Route::put('/admin/informasi/{id}/update', [\App\Http\Controllers\InformasiController::class, 'update'])->name('admin.informasi.update');
    Route::delete('/admin/informasi/{id}/delete', [\App\Http\Controllers\InformasiController::class, 'destroy'])->name('admin.informasi.delete');

    Route::get('/admin/team', [\App\Http\Controllers\TeamController::class, 'admin'])->name('admin.team');
    Route::post('/admin/team', [\App\Http\Controllers\TeamController::class, 'store'])->name('admin.team.store');
    Route::get('/team/{slug}', [TeamController::class, 'show'])->name('team.show');
    Route::get('/admin/team/{slug}/edit', [\App\Http\Controllers\TeamController::class, 'edit'])->name('admin.team.edit');
    Route::put('/admin/team/{id}/update', [\App\Http\Controllers\TeamController::class, 'update'])->name('admin.team.update');
    Route::delete('/admin/team/{id}/delete', [\App\Http\Controllers\TeamController::class, 'destroy'])->name('admin.team.delete');

    Route::post('/admin/tentang', [\App\Http\Controllers\TentangKamiController::class, 'store'])->name('admin.tentang.store');
    Route::get('/admin/tentang/{id}/edit', [\App\Http\Controllers\TentangKamiController::class, 'edit'])->name('admin.tentang.edit');
    Route::put('/admin/tentang/{id}/update', [\App\Http\Controllers\TentangKamiController::class, 'update'])->name('admin.tentang.update');
    Route::delete('/admin/tentang/{id}/delete', [\App\Http\Controllers\TentangKamiController::class, 'destroy'])->name('admin.tentang.delete');

Route::prefix('admin')->group(function () {
    Route::get('/tentang', [TentangKamiController::class, 'admin'])->name('admin.tentang');
    Route::post('/tentang/{id}/set-active', [TentangKamiController::class, 'setActive'])->name('admin.tentang.set-active');
});

    Route::get('/admin/project', [\App\Http\Controllers\ProjectController::class, 'admin'])->name('admin.project');
    Route::post('/admin/project', [\App\Http\Controllers\ProjectController::class, 'store'])->name('admin.project.store');
    Route::get('/project/{slug}', [ProjectController::class, 'show'])->name('project.show');
    Route::get('/admin/project/{slug}/edit', [\App\Http\Controllers\ProjectController::class, 'edit'])->name('admin.project.edit');
    Route::put('/admin/project/{id}/update', [\App\Http\Controllers\ProjectController::class, 'update'])->name('admin.project.update');
    Route::delete('/admin/project/{id}/delete', [\App\Http\Controllers\ProjectController::class, 'destroy'])->name('admin.project.delete');

    Route::middleware('auth')->group(function () {
        Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
        Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
        Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    });


require __DIR__.'/auth.php';
