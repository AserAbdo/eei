<?php

namespace App\Http\Controllers;

use App\Models\Project;
use App\Http\Requests\StoreProjectRequest;
use App\Http\Requests\UpdateProjectRequest;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $projects = project::all();
        return view('dashboard.pages.projects.list', compact('projects'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $galleryCategories = Category::all();
        return view('dashboard.pages.projects.create', compact('galleryCategories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $request->validate([
            'name' => 'required|string',
            'name_arabic' => 'required|string',
            'description' => 'required|string',
            'description_arabic' => 'required|string',
            'project_video' => 'required|string',
            'units' => 'required|integer|min:1',
            'area' => 'required|integer|min:1',
            'sell_rate' => 'required|numeric|min:0',
            'features' => 'required|string',
            'features_arabic' => 'required|string',
            'project_img' => 'nullable|file',
            'location' => 'nullable|file',
            'address' => 'required|string',
            'address_arabic' => 'required|string',
            'gallery_category_id' => 'required',
            'interior_hero' => 'nullable|file',
            'status' => 'required',
            'pdf' => 'required|mimes:pdf'
        ]);

        $location = null;
        $project_img = null;
        if ($request->file('location')) {
            $location = $request->file('location')->store('images/gallery', 'public');
        }

        if ($request->file('project_img')) {
            $project_img = $request->file('project_img')->store('images/gallery', 'public');
        }

        function getYouTubeVideoID($url)
        {
            parse_str(parse_url($url, PHP_URL_QUERY), $queryParams);
            return $queryParams['v'] ?? null;
        }

        $formattedFeatures = collect(explode("\n", $request->features))
            ->map(fn($line) => trim($line)) // Trim whitespace
            ->filter() // Remove empty lines
            ->map(fn($line) => str_starts_with($line, '- ') ? $line : '- ' . $line) // Ensure each line starts with "- "
            ->implode("\n");

        $formattedFeatures2 = collect(explode("\n", $request->features_arabic))
            ->map(fn($line) => trim($line)) // Trim whitespace
            ->filter() // Remove empty lines
            ->map(fn($line) => str_starts_with($line, '- ') ? $line : '- ' . $line) // Ensure each line starts with "- "
            ->implode("\n");

        if ($request->hasFile('pdf')) {
            $file = $request->file('pdf');
            $fileName = time() . '_' . $file->getClientOriginalName();
            $filePath = $file->storeAs('pdfs', $fileName, 'public');

            $project = Project::create([
                'name' => [
                    'en' => $request->name,
                    'ar' => $request->name_arabic,
                ],
                'description' => [
                    'en' => $request->description,
                    'ar' => $request->description_arabic,
                ],
                'project_video' => getYouTubeVideoID($request->project_video),
                'units' => $request->units,
                'area' => $request->area,
                'sell_rate' => $request->sell_rate,
                'features' => [
                    'en' => $formattedFeatures,
                    'ar' => $formattedFeatures2,
                ],
                'location' => $location,
                'project_img' => $project_img,
                'address' => [
                    'en' => $request->address,
                    'ar' => $request->address_arabic,
                ],
                'gallery_category_id' => $request->gallery_category_id,
                // 'interior_hero' => $interior_hero,
                'status' => $request->status,
                'pdf' => $filePath
            ]);
            return redirect()->route('projects.list');
        }
    }
    /**
     * Display the specified resource.
     */
    public function show(Project $project)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $project = Project::find($id);
        $galleryCategories  = Category::all();
        return view('dashboard.pages.projects.edit', compact('project', 'galleryCategories'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        // dd($request);
        $request->validate([
            'name' => 'required|string',
            'name_arabic' => 'required|string',
            'description' => 'required|string',
            'project_video' => 'required|string',
            'description_arabic' => 'required|string',
            'units' => 'required|integer|min:1',
            'area' => 'required|integer|min:1',
            'sell_rate' => 'required|numeric|min:0',
            'features' => 'required|string',
            'features_arabic' => 'required|string',
            'location' => 'nullable|file',
            'project_img' => 'nullable|file',
            'address' => 'required|string',
            'address_arabic' => 'required|string',
            'gallery_category_id' => 'required',
            'status' => 'required',
            'pdf' => 'nullable|mimes:pdf'
        ]);
        $project = Project::find($id);

        function getYouTubeVideoID2($url)
        {
            parse_str(parse_url($url, PHP_URL_QUERY), $queryParams);
            return $queryParams['v'] ?? null;
        }


        // Handle location image update
        if ($request->file('location')) {
            // Delete the old location image if it exists
            if ($project->location && Storage::disk('public')->exists($project->location)) {
                Storage::disk('public')->delete($project->location);
            }
            $location = $request->file('location')->store('images/gallery', 'public');
            $project->location = $location;
        }

        if ($request->file('project_img')) {
            // Delete the old location image if it exists
            if ($project->project_img && Storage::disk('public')->exists($project->project_img)) {
                Storage::disk('public')->delete($project->project_img);
            }
            $project_img = $request->file('project_img')->store('images/gallery', 'public');
            $project->project_img = $project_img;
        }

        // Handle interior_hero image update
        if ($request->file('interior_hero')) {
            // Delete the old interior_hero image if it exists
            if ($project->interior_hero && Storage::disk('public')->exists($project->interior_hero)) {
                Storage::disk('public')->delete($project->interior_hero);
            }
            $interior_hero = $request->file('interior_hero')->store('images/gallery', 'public');
            $project->interior_hero = $interior_hero;
        }

        // Handle PDF update
        if ($request->hasFile('pdf')) {
            // Delete the old PDF if it exists
            if ($project->pdf && Storage::disk('public')->exists($project->pdf)) {
                Storage::disk('public')->delete($project->pdf);
            }
            $file = $request->file('pdf');
            $fileName = time() . '_' . $file->getClientOriginalName();
            $filePath = $file->storeAs('pdfs', $fileName, 'public');
            $project->pdf = $filePath;
        }

        $formattedFeatures = collect(explode("\n", $request->features))
            ->map(fn($line) => trim($line)) // Trim whitespace
            ->filter() // Remove empty lines
            ->map(fn($line) => str_starts_with($line, '- ') ? $line : '- ' . $line) // Ensure each line starts with "- "
            ->implode("\n");

        $formattedFeatures2 = collect(explode("\n", $request->features_arabic))
            ->map(fn($line) => trim($line)) // Trim whitespace
            ->filter() // Remove empty lines
            ->map(fn($line) => str_starts_with($line, '- ') ? $line : '- ' . $line) // Ensure each line starts with "- "
            ->implode("\n");

        // Update other fields
        $project->name = [
            'en' => $request->name,
            'ar' => $request->name_arabic,
        ];
        $project->description = [
            'en' => $request->description,
            'ar' => $request->description_arabic,
        ];
        $project->units = $request->units;
        $project->project_video = getYouTubeVideoID2($request->project_video);
        $project->area = $request->area;
        $project->sell_rate = $request->sell_rate;
        $project->features = [
            'en' => $formattedFeatures,
            'ar' => $formattedFeatures2,
        ];
        $project->address = [
            'en' => $request->address,
            'ar' => $request->address_arabic,
        ];
        $project->gallery_category_id = $request->gallery_category_id;
        $project->status = $request->status;

        $project->save();

        return redirect()->route('projects.list')->with('success', 'Project updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $project = Project::find($id);
        $project->delete();
        return redirect()->route('projects.list');
    }


    public function deleted(){
        $projects = Project::onlyTrashed()->get();
        return view('dashboard.pages.projects.deleted' , compact('projects'));
    }

    public function restore($id)
    {
        $getProject = Project::withTrashed()->find($id);
        if ($getProject) {
            $getProject->restore();
        }
        return redirect()->route('projects.list');
    }
}
