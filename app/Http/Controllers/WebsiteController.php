<?php

namespace App\Http\Controllers;
use App\Models\website;
use Illuminate\Http\Request;

class WebsiteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function admin()
    {
        $websites = \App\Models\Website::all();
        return view('admin.website', compact('websites'));
    }
        public function daftar()
    {   $data = \App\Models\Website::all();
        return view('beranda.daftar', compact('data'));
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
        $validated = $request->validate([
            'name' => 'required|string|min:5|max:255',
            'url' => 'required|url|max:255',
            'type' => 'required|string|max:255',
        ]);

        \App\Models\website::create($validated);
        return redirect()->route('admin.website')->with('success', 'Website berhasil ditambahkan.');

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
         $websites = \App\Models\website::all();
        $websitedetail = \App\Models\website::findOrFail($id);
        return view('admin.website', compact('websites', 'websitedetail'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
         $validated = $request->validate([
            'name' => 'required|string|min:5|max:255',
            'url' => 'required|url|max:255',
            'type' => 'required|string|max:255',
        ]);

        \App\Models\website::where('id', $id)->update($validated);
        return redirect()->route('admin.website')->with('success', 'Website berhasil diperbarui.');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $website = \App\Models\website::findOrFail($id);
        $website->delete();
        return redirect()->route('admin.website')->with('success', 'Website berhasil dihapus.');
    }
    // app/Http/Controllers/WebsiteController.php

    // public function showDaftar()
    // {
    //     $data = \App\Models\Website::all();
    //     return view('beranda.daftar', compact('data'));
    // }


}
