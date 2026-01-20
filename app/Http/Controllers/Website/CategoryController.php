<?php

namespace App\Http\Controllers\website;

use App\Http\Controllers\Controller;
use App\Models\AboutSetting;
use App\Models\Category;
use App\Models\Service;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function category($id){
        $category = Category::findOrFail($id);
        $settings = AboutSetting::find(1);
        $service = Service::where('category_id' , $category->id)->get();
        $service_all = Service::all();

        return view('website.pages.category-details' , compact('category' , 'service', 'settings', 'service_all')) ;
    }
}
