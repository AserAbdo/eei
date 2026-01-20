<?php

namespace App\Http\Controllers;

use App\Models\Project;
use App\Models\Unit;
use App\Http\Requests\StoreUnitRequest;
use App\Http\Requests\UpdateUnitRequest;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class UnitController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $allUnits = Unit::with('project')->get();
        $units = $allUnits->toArray();
        $galleryCategories = Category::all();
        // dd($units);
        return view('dashboard.pages.units.list', compact('units', 'galleryCategories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $projects = Project::all();
        $galleryCategories = Category::all();

        return view('dashboard.pages.units.create', compact('projects', 'galleryCategories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validation = $request->validate([
            'title' => 'required|string',
            'title_arabic' => 'required|string',
            'description' => 'required|string',
            'description_arabic' => 'required|string',
            'project_id' => 'required|integer',
            'category_id' => 'required|integer',
            'price' => 'required|numeric|min:0',
            'area' => 'required|numeric|min:0',
            'bedrooms' => 'required|integer|min:1',
            'bathrooms' => 'required|integer|min:1',
            'status' => 'required|integer|min:1',
            'hero_image' => 'required|file',
            'image' => 'required|file',

        ]);

        $imagePath = null;
        $hero_image = null;
        if ($request->file('image')) {
            $imagePath = $request->file('image')->store('images/gallery', 'public');
        }
        if ($request->file('hero_image')) {
            $hero_image = $request->file('hero_image')->store('images/gallery', 'public');
        }

        $newUnit = Unit::create([
            'title' => [
                'en' => $request->title,
                'ar' => $request->title_arabic,
            ],
            'description' => [
                'en' => $request->description,
                'ar' => $request->description_arabic,
            ],
            'project_id' => $request->project_id,
            'category_id' => $validation["category_id"],
            'area' => $request->area,
            'price' => $request->price,
            'bedrooms' => $request->bedrooms,
            'bathrooms' => $request->bathrooms,
            'status' => $request->status,
            'hero_image' => $hero_image,
            'image' => $imagePath,
        ]);

        return redirect()->route('units.list');
    }

    /**
     * Display the specified resource.
     */
    public function show(Unit $unit)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $unit = Unit::find($id);
        $projects = Project::all();
        $galleryCategories = Category::all();

        return view('dashboard.pages.units.edit' , compact('unit' , 'projects', 'galleryCategories'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
{
    // Validate the request data
    $validatedData = $request->validate([
        'title' => 'required|string',
        'title_arabic' => 'required|string',
        'description' => 'required|string',
        'description_arabic' => 'required|string',
        'project_id' => 'required|integer|exists:projects,id',
        'category_id' => 'required|integer|exists:categories,id',
        'area' => 'required|numeric|min:0',
        'price' => 'required|numeric|min:0',
        'bedrooms' => 'required|integer|min:1',
        'bathrooms' => 'required|integer|min:1',
        'status' => 'required|integer|min:1',
        'hero_image' => 'nullable|file|image|mimes:jpeg,png,jpg,gif',
        'image' => 'nullable|file|image|mimes:jpeg,png,jpg,gif',

    ]);

    // Find the unit by ID
    $unit = Unit::findOrFail($id);

        // Handle image uploads
    $imagePath = $unit->image; // Retain the existing image path
    $heroImagePath = $unit->hero_image; // Retain the existing hero image path

    if ($request->hasFile('image')) {
        // Delete the old image if it exists
        if ($unit->image && Storage::exists('public/' . $unit->image)) {
            Storage::delete('public/' . $unit->image);
        }

        $imagePath = $request->file('image')->store('images/gallery', 'public');
    }

    if ($request->hasFile('hero_image')) {
        // Delete the old hero image if it exists
        if ($unit->hero_image && Storage::exists('public/' . $unit->hero_image)) {
            Storage::delete('public/' . $unit->hero_image);
        }
        $heroImagePath = $request->file('hero_image')->store('images/gallery', 'public');
    }

    // Update the unit with the new data
    $unit->update([
        'title' => [
            'en' => $validatedData['title'],
            'ar' => $validatedData['title_arabic'],
        ],
        'description' => [
            'en' => $validatedData['description'],
            'ar' => $validatedData['description_arabic'],
        ],
        'project_id' => $validatedData['project_id'],
        'category_id' => $validatedData['category_id'],
        'area' => $validatedData['area'],
        'price' => $validatedData['price'],
        'bedrooms' => $validatedData['bedrooms'],
        'bathrooms' => $validatedData['bathrooms'],
        'status' => $validatedData['status'],
        'hero_image' => $heroImagePath,
        'image' => $imagePath,

    ]);

    // Redirect to the unit list with a success message
    return redirect()->route('units.list')->with('success', 'Unit updated successfully!');
}


    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $unit = Unit::find($id);
        $unit->delete();
        return redirect()->route('units.list');
    }

    public function deleted(){
        $units = Unit::onlyTrashed()->get();
        return view('dashboard.pages.units.deleted' , compact('units'));
    }

    public function restore($id)
    {
        $getUnit = Unit::withTrashed()->find($id);
        if ($getUnit) {
            $getUnit->restore();
        }
        return redirect()->route('units.list');
    }
}
