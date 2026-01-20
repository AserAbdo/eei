<?php

namespace App\Http\Controllers;

use App\Models\RequestDesgin;
use Illuminate\Http\Request;

class RequestDesginController extends Controller
{
    public function index() {
        $allRequests = RequestDesgin::all();
        return view('dashboard.pages.settings.request-desgins', compact('allRequests'));
    }

    public function delete($id) {
        $design = RequestDesgin::find($id);

        $design->delete();

        return redirect()->route('settings.desgin');

    }
}
