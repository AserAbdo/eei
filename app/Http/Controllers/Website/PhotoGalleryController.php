<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use App\Models\Gallery;
use Illuminate\Http\Request;

class PhotoGalleryController extends Controller
{
    public function index()
    {
        $photos = Gallery::all();
        return view('website.index')->with('photos', $photos);
    }
}
