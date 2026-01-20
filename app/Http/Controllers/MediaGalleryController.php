<?php

namespace App\Http\Controllers;

use App\Models\MediaCategory;
use Illuminate\Http\Request;

class MediaGalleryController extends Controller
{
    public function index()
    {
        $categories = MediaCategory::all();
        // dd($all);
        return view('dashboard.pages.gallery.categories', compact('categories'));
    }

    public function create()
    {
        return view('dashboard.pages.gallery.create-category');
    }

    public function store(Request $request)
    {
        $validation = $request->validate([
            'title' => 'required|string',
            'description' => 'required|string'
        ]);

        $new = MediaCategory::create([
            'title' => $request->title,
            'description' => $request->description
        ]);

        return redirect()->route('list.media');
    }
}
