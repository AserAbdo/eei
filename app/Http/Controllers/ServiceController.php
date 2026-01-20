<?php

namespace App\Http\Controllers;

use App\Models\Project;
use App\Http\Requests\StoreUnitRequest;
use App\Http\Requests\UpdateUnitRequest;
use App\Models\Category;
use App\Models\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $services = Service::with('category')->get();
        $all = $services->toArray();
        return view('dashboard.pages.services.list', compact('all'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::all();
        return view('dashboard.pages.Services.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validation = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'category_id' => 'required|integer',
            'pakage_size' => 'required|numeric|min:0',
            'content' => 'required|string',
            'image' => 'required|file',
            'status' => 'required',

        ]);

        // dd($validation);
        $imagePath = null;
        if ($request->file('image')) {
            $imagePath = $request->file('image')->store('images/gallery', 'public');
        }

        $newUnit = Service::create([
            'name' => $request->name,
            'description' => $request->description,
            'category_id' => $request->category_id,
            'pakage_size' => $request->pakage_size,
            'content' => $request->content,
            'status' => $request->status,
            'image' => $imagePath,

        ]);

        return redirect()->route('service.list');
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
        $service = Service::find($id);
        $category = Category::all();
        return view('dashboard.pages.services.edit',compact( 'service' , 'category'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        // Validate the request data
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'category_id' => 'required|integer|exists:categories,id',
            'pakage_size' => 'required|numeric|min:0',
            'content' => 'required|string',
            'status' => 'required',
            'image' => 'nullable|file|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $service = Service::findOrFail($id);

        $imagePath = $service->image;

        if ($request->hasFile('image')) {
            if ($service->image && Storage::exists('public/' . $service->image)) {
                Storage::delete('public/' . $service->image);
            }
            $imagePath = $request->file('image')->store('images/gallery', 'public');
        }

        $service->update([
            'name' => $validatedData['name'],
            'description' => $validatedData['description'],
            'category_id' => $validatedData['category_id'],
            'pakage_size' => $validatedData['pakage_size'],
            'content' => $validatedData['content'],
            'status' => $validatedData['status'],
            'image' => $imagePath,
        ]);

        return redirect()->route('service.list')->with('success', 'Service updated successfully!');
    }



    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $service = Service::find($id);
        $service->delete();
        return redirect()->route('service.list');
    }
}
