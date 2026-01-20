<?php

namespace App\Http\Controllers;

use App\Models\AboutSetting;
use App\Models\Gallery;
use App\Models\MediaCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class AboutController extends Controller
{
    public function index()
    {
        $settings = AboutSetting::all();
        $gallery = MediaCategory::all();
        // dd($gallery);
        return view('dashboard.pages.settings.about-settings', compact('settings', 'gallery'));
    }


    public function update(Request $request)
    {

        // Validate the request data
        $validation = $request->validate([
            'title'             => "string",
            'hero_image'        => "nullable|image",
            'who_we_are'        => "string",
            'who_we_are_image'  => "nullable|image",
            'our_vision'        => "string",
            'our_vision_image'  => "nullable|image",
            'our_vision_image2'  => "nullable|image",
            'our_mission'       => "string",
            'our_mission_image' => "nullable|image",
            'gallery_id'           => "nullable",
            'gallery_value_id'           => "nullable",

        ]);
        $aboutSetting = AboutSetting::find(1);

        if (!$aboutSetting) {
            return redirect()->back()->with('error', 'About Setting not found.');
        }

        // Handle image uploads
        $heroImagePath = $aboutSetting->hero_image;
        $whoWeAreImagePath = $aboutSetting->who_we_are_image;
        $ourVisionImagePath = $aboutSetting->our_vision_image;
        $ourMissionImagePath = $aboutSetting->our_mission_image;
        $our_vision_image2 = $aboutSetting->our_vision_image2;


        if ($request->file('hero_image')) {
            $heroImagePath = $request->file('hero_image')->store('images/settings/about', 'public');
        }

        if ($request->file('who_we_are_image')) {
            $whoWeAreImagePath = $request->file('who_we_are_image')->store('images/settings/about', 'public');
        }

        if ($request->file('our_vision_image2')) {
            $our_vision_image2 = $request->file('our_vision_image2')->store('images/settings/about', 'public');
        }

        if ($request->file('our_vision_image')) {
            $ourVisionImagePath = $request->file('our_vision_image')->store('images/settings/about', 'public');
        }


        if ($request->file('our_mission_image')) {
            $ourMissionImagePath = $request->file('our_mission_image')->store('images/settings/about', 'public');
        }

        $aboutSetting->update([
            'title' => $request->input('title'),
            'hero_description' => $request->input('hero_description'),
            'hero_image' => $heroImagePath,
            'who_we_are' => $request->input('who_we_are'),
            'who_we_are_image' => $whoWeAreImagePath,
            'our_message' => $request->input('our_message'),
            'our_vision' => $request->input('our_vision'),
            'our_vision_image' => $ourVisionImagePath,
            'our_vision_image2' => $our_vision_image2,
            'our_mission' => $request->input('our_mission'),
            'our_mission_image' => $ourMissionImagePath,
            'gallery_id' => $request->input('gallery_id'),
            'gallery_value_id' => $request->input('gallery_value_id'),

        ]);

        return redirect()->back()->with('success', 'About Setting updated successfully.');
    }
}
