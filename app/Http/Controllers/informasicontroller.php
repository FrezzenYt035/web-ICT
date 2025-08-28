<?php

namespace App\Http\Controllers;

use App\Models\informasi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use App\Models\Tentang_Kami;


class informasicontroller extends Controller
{
    /**
     * Display a listing of the resource.
     * $informasi = \App\Models\informasi::all();
     */
    public function admin()
    {
        $informasi = \App\Models\informasi::orderBy('created_at', 'desc')->get();
        return view('admin.informasi', compact('informasi'));
    }
    public function informasi()
    {
        $informasi = \App\Models\informasi::orderBy('created_at', 'desc')->get();
        return view('beranda.informasi', compact('informasi'));
    }
    // public function beranda()
    // {
    //     $informasi = \App\Models\informasi::orderBy('created_at', 'desc')->get();
    //     return view('beranda.beranda', compact('informasi'));
    // }
        public function beranda()
    {
        $informasi   = Informasi::latest()->get();
        $tentang_kami = Tentang_Kami::where('is_active', 1)->get(); // hanya ambil yang aktif

        return view('beranda.beranda', compact('informasi', 'tentang_kami'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'judul' => 'required',
            'deskripsi' => 'required',
            'gambar' => 'required|image|mimes:jpeg,png,jpg|max:2048',
        ]);

        $file = $request->file('gambar');
        $namaFile = time() . '_' . $file->getClientOriginalName();
        $file->move(public_path('uploads'), $namaFile);

        // Simpan ke database
        Informasi::create([
            'judul' => $request->judul,
            'deskripsi' => $request->deskripsi,
            'gambar' => $namaFile,
            'slug' => Str::slug($request->judul),
        ]);

        return redirect()->back()->with('success', 'Berhasil disimpan!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $slug)
    {
        $informasi = Informasi::where('slug', $slug)->firstOrFail();
        return view('detail.detail', compact('informasi'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $slug)
    {
          $informasi = informasi::all();
          $informasidetail = informasi::where('slug', $slug)->firstOrFail();
          $informasigambar = asset('uploads/' . $informasidetail->gambar);
          return view('admin.informasi', compact('informasi', 'informasidetail', 'informasigambar'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
          $validated = $request->validate([
            'judul' => 'required|string|min:5|max:255',
            'deskripsi' => 'required|string',
            'gambar' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        if ($request->hasFile('gambar')) {
            $file = $request->file('gambar');
            $filename = time() . '_' . $file->getClientOriginalName();
            $file->move(public_path('uploads'), $filename);
            $validated['gambar'] = $filename;

        }

        informasi::where('id', $id)->update($validated);
        return redirect()->route('admin.informasi')->with('success', 'Informasi berhasil diperbarui.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $informasi = informasi::findOrFail($id);
        if ($informasi->gambar) {
            Storage::disk('public')->delete($informasi->gambar);
        }
        $informasi->delete();
        return redirect()->route('admin.informasi')->with('success', 'Informasi berhasil dihapus.');
    }

}
