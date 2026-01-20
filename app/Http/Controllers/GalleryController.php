<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Gallery;
use App\Http\Requests\StoreGalleryRequest;
use App\Http\Requests\UpdateGalleryRequest;
use App\Models\MediaCategory;
use Illuminate\Http\Request;

class GalleryController extends Controller
{
    /**
     * Display a listing of the resource.
     */


    public function index()
    {
        $gallery = Gallery::with('category')->get();
        return view('dashboard.pages.gallery.list-media', compact('gallery'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $all = MediaCategory::all();
        return view('dashboard.pages.gallery.upload-media', compact('all'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|file',
            'gallery_category_id' => 'required' ,
            'name' =>'required'
        ]);

        if ($request->file('title')) {
            $titlePath = $request->file('title')->store('images/gallery', 'public');
        }

        $newGallery = Gallery::create([
            'gallery_category_id' => $request->input('gallery_category_id') ,
            'title' => $titlePath,
            'name' => $request->input('name'),
            'description' => $request->input('description'),
        ]);
        return redirect()->route('list.media');
    }

    /**
     * Display the specified resource.
     */
    public function show(Gallery $gallery)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $gallery = Gallery::find($id);
        $categories = Category::all();
        // dd($gallery);
        return view('dashboard.pages.gallery.edit-media', compact('gallery', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     */

    public function update(UpdateGalleryRequest $request, $id)
    {
        $gallery = Gallery::find($id);
        dd($gallery);
        if ($gallery) {
            $gallery->category_id = $request->input('category_id');

            if ($request->hasFile('title')) {
                $gallery->title = $request->file('title')->store('images/gallery', 'public');
            }

            $gallery->save();

            return redirect()->route('list.media')->with('success', 'Gallery item updated successfully.');
        } else {
            return redirect()->route('list.media')->with('error', 'Gallery item not found.');
        }
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $deleteGallery = Gallery::find($id);
        // dd($deleteGallery);
        $deleteGallery->delete();
        return redirect()->back()->with('success', 'Item deleted successfully.');
    }

    // get deleted media
    public function deleted()
    {
        $gallery = Gallery::onlyTrashed()->get();
        return view('dashboard.pages.gallery.deleted-media', compact('gallery'));
    }

    public function restore($id)
    {
        // Find the soft-deleted record
        $gallery = Gallery::onlyTrashed()->find($id);

        if ($gallery) {
            $gallery->restore(); // Restore the record
            return redirect()->back()->with('success', 'Gallery item restored successfully.');
        } else {
            return redirect()->back()->with('error', 'Gallery item not found or not deleted.');
        }
    }
}
