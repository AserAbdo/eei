<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use App\Models\AboutSetting;
use App\Models\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function getService($id){
        $item = Service::findOrFail($id);
        $settings = AboutSetting::find(1);
        $service = Service::all();

        return view('website.pages.service-details' , compact('item', 'settings', 'service'));
    }
}
