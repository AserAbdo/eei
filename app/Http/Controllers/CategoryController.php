<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreProjectRequest;
use App\Http\Requests\UpdateProjectRequest;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $caregories = Category::all();
        return view('dashboard.pages.categories.list', compact('caregories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.pages.categories.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'image' => 'nullable|file',
            'icon' => 'nullable|file',
        ]);

        $image = null;
        if ($request->file('image')) {
            $image = $request->file('image')->store('images/gallery', 'public');
        }

        $icon = null;
        if ($request->file('icon')) {
            $icon = $request->file('icon')->store('images/gallery', 'public');
        }


        $project = Category::create([
            'name' => $request->name,
            'description' => $request->description,
            'image' => $image,
            'icon' => $icon,
        ]);
        return redirect()->route('categories.list');
    }
    /**
     * Display the specified resource.
     */
    public function show()
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $category = Category::find($id);
        return view('dashboard.pages.categories.edit', compact('category'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        // dd($request);
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'image' => 'nullable|file',
            'icons' => 'nullable|file',
        ]);
        $category = Category::find($id);

        $image = $category->image;
        $icon = $category->icon;

        if ($request->file('image')) {
            // Delete the old location image if it exists
            if ($category->image && Storage::disk('public')->exists($category->image)) {
                Storage::disk('public')->delete($category->image);
            }
            $image = $request->file('image')->store('images/gallery', 'public');
            $category->image = $image;
        }
        if ($request->file('icon')) {
            // Delete the old location image if it exists
            if ($category->icon && Storage::disk('public')->exists($category->icon)) {
                Storage::disk('public')->delete($category->icon);
            }
            $icon = $request->file('icon')->store('images/gallery', 'public');
            $category->icon = $icon;
        }

        // Update other fields
        $category->name = $request->name;
        $category->description = $request->description;
        $category->image = $image;
        $category->icon = $icon;
        $category->save();

        return redirect()->route('categories.list')->with('success', 'Project updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $project = Category::find($id);
        $project->delete();
        return redirect()->route('categories.list');
    }

    public function getTranshed()
    {
        $item = Category::onlyTrashed()->get();
        return view('dashboard.pages.categories.deleted', ['item' => $item]);
    }

    public function unsetDeletedAt($id)
    {
        $category = Category::onlyTrashed()->findOrFail($id);

        $category->deleted_at = null;
        $category->save();

        return redirect()->route('categories.deleted')->with('success', 'Category restored successfully.');
    }
}
