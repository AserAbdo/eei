<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Gallery;
use App\Models\Setting;
use App\Http\Requests\StoreSettingRequest;
use App\Http\Requests\UpdateSettingRequest;
use Illuminate\Http\Request; // Add this import
use Illuminate\Support\Facades\Log;

class SettingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $settings = Setting::all();
        $galleryCategories = Category::all();
        return view('dashboard.pages.settings.site-settings', compact('settings', 'galleryCategories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // return view('dashboard.pages.settings.site-settings');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request) {}

    /**
     * Display the specified resource.
     */
    public function show(Setting $setting)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Setting $setting)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        //validate request
        $validation = $request->validate([
            'site-name'     => "string",
            'logo'          => "image|mimes:png,jpg,jpeg,svg",
            'favicon'       => "image|mimes:png,jpg,jpeg,svg",
            'contact_hero'  => "image|mimes:png,jpg,jpeg,svg",
            'contactImg'  => "image|mimes:png,jpg,jpeg,svg",
            
            'phone'         => "string|max:30",
            'email'         => "email",
            'working-hours' => "nullable|string",
            'address'       => "string",
            'footer'        => "image|mimes:png,jpg,jpeg",

            'facebook'      => "nullable|string",
            'instagram'     => "nullable|string",
            'linkedin'      => "nullable|string",
            'youtube'       => "nullable|string",
        ]);


        $siteSettings = Setting::find(1);
        $logoPath = $siteSettings->logo;
        $faviconPath = $siteSettings->favicon;
        $footerPath = $siteSettings->footer;
        $contactHeror = $siteSettings->contact_hero;
        $contactImg = $siteSettings->contact_img;


        // handel images
        if ($request->file('logo')) {
            $logoPath = $request->file('logo')->store('images', 'public');
        }
        if ($request->file('favicon')) {
            $faviconPath = $request->file('favicon')->store('images', 'public');
        }

        if ($request->file('footer')) {
            $footerPath = $request->file('footer')->store('images', 'public');
        }

        if ($request->file('contact_hero')) {
            $contactHeror = $request->file('contact_hero')->store('images', 'public');
        }

        if ($request->file('contact_img')) {
            $contactImg = $request->file('contact_img')->store('images', 'public');
        }

        $setting = $siteSettings->update([
            'site-name' => $request->input('site-name'),
            'logo' => $logoPath,
            'favicon' => $faviconPath,
            'phone' => $request->input('phone'),
            'email' => $request->input('email'),
            'working-hours' => $request->input('working-hours'),
            'address' => $request->input('address'),
            'footer' => $footerPath,
            'facebook' => $request->input('facebook'),
            'instagram' => $request->input('instagram'),
            'linkedin' => $request->input('linkedin'),
            'youtube' => $request->input('youtube'),
            'contact_hero' => $contactHeror,
            'contact_img' => $contactImg,
        ]);

        log($setting);
        if ($setting) {
            return redirect()->back();
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Setting $setting)
    {
        //
    }
}
