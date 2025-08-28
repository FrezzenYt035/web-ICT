<?php

namespace App\Http\Controllers;

use App\Models\team;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class TeamController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function admin()
    {
        $team = \App\Models\team::orderBy('created_at', 'desc')->get();
        return view('admin.team', compact('team'));
    }
    public function index()
    {
        $team = team::orderBy('created_at', 'desc')->get();
        return view('beranda.team', compact('team'));
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
            'name'     => 'required|string|max:155',
            'position' => 'required|string|max:100',
            'no_WA'   => 'required|string|max:15',
            'bio'      => 'nullable|string|max:255',
            'image'    => 'required|image|mimes:jpeg,png,jpg|max:6048',
        ]);

        $file = $request->file('image');
        $namafile = time() . '_' . $file->getClientOriginalName();
        $file->move(public_path('/uploads'), $namafile);

        Team::create([
            'name'     => $request->name,
            'position' => $request->position,
            'no_WA'   => $request->no_WA,
            'bio'      => $request->bio,
            'image'    => $namafile,
            'slug'     => Str::slug($request->name),
        ]);

        return redirect()->route('admin.team')->with('success', 'Team member created successfully.');
    }


    /**
     * Display the specified resource.
     */
    public function show(string $slug)
    {
        $team = team::where('slug', $slug)->firstOrFail();
        return view('detail.detail_team', compact('team'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $slug)
    {
        $team = team::all();
        $teamDetail = team::where('slug', $slug)->firstOrFail();
        $teamimage = asset('uploads/' . $teamDetail->image);
        return view('admin.team', compact('team', 'teamDetail', 'teamimage'));
    }
    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
          $validated = $request->validate([
            'name' => 'required|string|max:155',
            'position' => 'required|string|max:100',
            'no_WA'   => 'required|string|max:15',
            'bio'      => 'nullable|string|max:255',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $filename = time() . '_' . $file->getClientOriginalName();
            $file->move(public_path('uploads'), $filename);
            $validated['image'] = $filename;

        }

        team::where('id', $id)->update($validated);

        return redirect()->route('admin.team')->with('success', 'Team member updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $team = team::findOrFail($id);
        if ($team->image) {
            Storage::disk('public')->delete($team->image);
        }
        $team->delete();
        return redirect()->route('admin.team')->with('success', 'Team member deleted successfully.');
    }
}

