<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\HomePage;
use App\Http\Requests\StoreHomePageRequest;
use App\Http\Requests\UpdateHomePageRequest;
use Illuminate\Http\Request; // Add this import
use Illuminate\Support\Facades\Log;

class HomePageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $allSettings = HomePage::all();
        // dd($allSettings);
        return view('dashboard.pages.settings.home-settings', compact('allSettings'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function store(Request $request) {}

    /**
     * Store a newly created resource in storage.
     */


    /**
     * Display the specified resource.
     */
    public function show(HomePage $homePage)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(HomePage $homePage)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */

    public function update(Request $request)
    {
        $homePage = HomePage::find(1);

        $validation = $request->validate([
            'slider1' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg',
            'slider2' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg',
            'who_we_are_img_first' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg',
            'who_we_are_img_second' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg',
            'why_eei_image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg',
            'title' => 'required|string|min:5|max:255',
            'description' => 'required|string|min:10|max:255',
            'who_we_are_desc' => 'required|string|min:10|max:255',
            'feature1_icon' => 'required|string|min:5|max:255',
            'feature1_title' => 'required|string|min:5|max:255',
            'feature1_desc' => 'required|string|min:10|max:255',
            'feature2_icon' => 'required|string|min:5|max:255',
            'feature2_title' => 'required|string|min:5|max:255',
            'feature2_desc' => 'required|string|min:10|max:255',
            'feature3_icon' => 'required|string|min:5|max:255',
            'feature3_title' => 'required|string|min:5|max:255',
            'feature3_desc' => 'required|string|min:10|max:255',
            'why_eei_desc' => 'required|string|min:10|max:255',
            'why_eei_points' => 'required|string|min:10|max:255',
        ]);
        Log::info($validation);
        $slider1Path = $homePage->slider1;
        if ($request->file('slider1')) {
            $slider1Path = $request->file('slider1')->store('images/home', 'public');
        }

        $slider2Path = $homePage->slider2;
        if ($request->file('slider2')) {
            $slider2Path = $request->file('slider2')->store('images/home', 'public');
        }

        $who_we_are_img_first = $homePage->who_we_are_img_first;
        if ($request->file('who_we_are_img_first')) {
            $who_we_are_img_first = $request->file('who_we_are_img_first')->store('images/home', 'public');
        }

        $who_we_are_img_second = $homePage->who_we_are_img_second;
        if ($request->file('who_we_are_img_second')) {
            $who_we_are_img_second = $request->file('who_we_are_img_second')->store('images/home', 'public');
        }

        $why_eei_image = $homePage->why_eei_image;
        if ($request->file('why_eei_image')) {
            $why_eei_image = $request->file('why_eei_image')->store('images/home', 'public');
        }

        // Ensure each line starts with "- " while keeping multi-line points intact
        $formattedFeatures = collect(explode("\n", $request->input('why_eei_points')))
            ->map(fn($line) => trim($line)) // Trim whitespace
            ->filter() // Remove empty lines
            ->map(fn($line) => str_starts_with($line, '- ') ? $line : '- ' . $line) // Ensure each line starts with "- "
            ->implode("\n");

        $homePage->update([
            'slider1' => $slider1Path,
            'slider2' => $slider2Path,
            'title' => $request->input('title'),
            'description' => $request->input('description'),
            'who_we_are_desc' => $request->input('who_we_are_desc'),
            'services' => $request->input('services'),
            'feature1_icon' => $request->input('feature1_icon'),
            'feature1_title' => $request->input('feature1_title'),
            'feature1_desc' => $request->input('feature1_desc'),
            'feature2_icon' => $request->input('feature2_icon'),
            'feature2_title' => $request->input('feature2_title'),
            'feature2_desc' => $request->input('feature2_desc'),
            'feature3_icon' => $request->input('feature3_icon'),
            'feature3_title' => $request->input('feature3_title'),
            'feature3_desc' => $request->input('feature3_desc'),
            'why_eei_desc' => $request->input('why_eei_desc'),
            'why_eei_points' => $formattedFeatures,
            'who_we_are_img_first' => $who_we_are_img_first,
            'who_we_are_img_second' => $who_we_are_img_second,
            'why_eei_image' => $why_eei_image,
        ]);

        return redirect()->back()->with('success', 'Home page updated successfully!');
    }



    /**
     * Remove the specified resource from storage.
     */
    public function destroy(HomePage $homePage)
    {
        //
    }
}
