<?php

namespace App\Http\Controllers;

use App\Models\Certificate;
use App\Models\MediaCategory;
use Illuminate\Http\Request;

class CertificateSettings extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $settings = Certificate::find(1);
        $gallery = MediaCategory::all();
        return view('dashboard.pages.settings.certificate', compact('settings', 'gallery'));
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
        //
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
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        $validation = $request->validate([
            'title'              => "string",
            'hero'              => "image|mimes:png,jpg,jpeg,svg",
            'description'       => "string",
            'gallery'           => "integer"

        ]);


        $certificateSettings = Certificate::find(1);
        $hero = $certificateSettings->hero;
        // handel images
        if ($request->file('hero')) {
            $hero = $request->file('hero')->store('images', 'public');
        }
        $setting = $certificateSettings->update([
            'title' => $request->input('title'),
            'hero' => $hero,
            'gallery' => $request->input('gallery'),
            'description' => $request->input('description')
        ]);
        
        if ($setting) {
            return redirect()->back();
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
