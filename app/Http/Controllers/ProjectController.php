<?php

namespace App\Http\Controllers;

use App\Models\project;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function admin()
    {
        $projects = Project::orderBy('created_at', 'desc')->get();
        return view('admin.project', compact('projects'));
    }
    public function index()
    {
        $projects = Project::orderBy('created_at', 'desc')->get();
        return view('beranda.project', compact('projects'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate(
            [
                'name' => 'required|string|max:155',
                'link' => 'required|url',
                'description' => 'required|string',
                'detail' => 'required|string',
                'image' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',

            ]
        );

        $file = $request->file('image');
        $filename = time() . '_' . $file->getClientOriginalName();
        $file->move(public_path('uploads'), $filename);

        project::create([
            'name' => $request->name,
            'link' => $request->link,
            'description' => $request->description,
            'detail' => $request->detail,
            'image' => $filename,
            'slug' => Str::slug ($request->name),
        ]);

        return redirect()->route('admin.project')->with('success', 'Project created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $slug)
    {
        $Project = project::where('slug', $slug)->firstOrFail();
        return view('detail.detail_project', compact('Project'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $slug)
    {
        $projects = project::all();
        $projectdetail = project::where('slug', $slug)->firstOrFail();
        $projectimage = asset('uploads/' . $projectdetail->image);
        return view('admin.project', compact('projects', 'projectdetail', 'projectimage'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validate = $request->validate([
            'name' => 'required|string|max:155',
            'link' => 'required|url',
            'description' => 'required|string',
            'detail' => 'required|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
        ]);

        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $filename = time() . '_' . $file->getClientOriginalName();
            $file->move(public_path('uploads'), $filename);
            $validate['image'] = $filename;
        }

        project::where('id', $id)->update($validate);
        return redirect()->route('admin.project')->with('success', 'Project updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $project = project::findOrFail($id);
        if ($project->image) {
            Storage::disk('public')->delete($project->image);
        }
        $project->delete();
        return redirect()->route('admin.project')->with('success', 'Project deleted successfully.');
    }

}
