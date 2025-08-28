<?php

namespace App\Http\Controllers;

use App\Models\tentang_kami;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class TentangKamiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function admin()
    {
        $tentang_kami = \App\Models\tentang_kami::orderBy('created_at', 'desc')->get();
        return view('admin.tentang', compact('tentang_kami'));
    }
     public function tentang()
    {
        // tampilkan hanya data aktif
        $tentang_kami = Tentang_Kami::where('is_active', 1)->first();
        return view('beranda.tentang', compact('tentang_kami'));
    }

    public function index()
    {
        // beranda juga hanya menampilkan data aktif
        $tentang_kami = Tentang_Kami::where('is_active', 1)->first();
        return view('beranda.beranda', compact('tentang_kami'));
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
            'image' => 'required|image|mimes:jpeg,png,jpg|max:2048',
        ]);

        $file = $request->file('image');
        $namaFile = time() . '_' . $file->getClientOriginalName();
        $file->move(public_path('uploads'), $namaFile);

        // Simpan ke database
        tentang_kami::create([
            'judul' => $request->judul,
            'deskripsi' => $request->deskripsi,
            'image' => $namaFile,
        ]);

        return redirect()->route('admin.tentang')->with('success', 'Data berhasil disimpan.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        // $tentang_kami = tentang_kami::findOrFail($id);
        // return view('admin.tentang_show', compact('tentang_kami'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $tentang_kami = tentang_kami::all();
        $tentang_kami_detail = tentang_kami::where('id', $id)->firstOrFail();
        $tentang_kami_image = asset('uploads/' . $tentang_kami_detail->image);
        return view('admin.tentang', compact('tentang_kami', 'tentang_kami_detail', 'tentang_kami_image'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,string $id)
    {
        $tentang_kami = tentang_kami::findOrFail($id);

        $request->validate([
            'judul' => 'required|string|max:255',
            'deskripsi' => 'required|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
        ]);

        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $namaFile = time() . '_' . $file->getClientOriginalName();
            $file->move(public_path('uploads'), $namaFile);
            $data['image'] = $namaFile;


        $tentang_kami->update($data);

        return redirect()->route('admin.tentang')->with('success', 'Data berhasil diperbarui.');
       }
    }
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $tentang_kami = tentang_kami::findOrFail($id);
        if ($tentang_kami->image) {
            Storage::disk('public')->delete('uploads/' . $tentang_kami->image);
        }

        $tentang_kami->delete();

        return redirect()->route('admin.tentang')->with('success', 'Data berhasil dihapus.');
    }

   

        public function setActive($id)
    {
        // nonaktifkan semua data
        Tentang_Kami::query()->update(['is_active' => 0]);

        // aktifkan data tertentu
        $tentang = Tentang_Kami::findOrFail($id);
        $tentang->is_active = 1;
        $tentang->save();

        return redirect()->back()->with('success', 'Data berhasil diaktifkan');
    }

};
