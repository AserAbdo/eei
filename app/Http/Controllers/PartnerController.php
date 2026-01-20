<?php

namespace App\Http\Controllers;

use App\Models\Partner;
use App\Http\Requests\StorePartnerRequest;
use App\Http\Requests\UpdatePartnerRequest;
use Illuminate\Support\Facades\Log;
use Illuminate\Http\Request;


class PartnerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $all = Partner::all();
        // dd($all);
        return view('dashboard.pages.partners.list', compact('all'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.pages.partners.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $validate = $request->validate([
            'name' => 'required|string|max:100',
            'logo' => 'required|file',
        ]);

        $logoPath = null;
        if ($request->file('logo')) {
            $logoPath = $request->file('logo')->store('images/partners', 'public');
        }

        $newPartner = Partner::create([
            'name' => $request->name,
            'logo' => $logoPath,
        ]);
        return redirect()->route('partners.list');
    }

    /**
     * Display the specified resource.
     */
    public function show(Partner $partner)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Partner $partner)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePartnerRequest $request, Partner $partner)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $getPartner = Partner::find($id);
        if ($getPartner) {
            $getPartner->delete();
        }
        return redirect()->route('partners.list');
    }

    public function deleted()
    {
        $deleted = Partner::onlyTrashed()->get();
        return view('dashboard.pages.partners.deleted', compact('deleted'));
    }
    public function restore($id)
    {
        $getPartner = Partner::withTrashed()->find($id);
        if ($getPartner) {
            $getPartner->restore();
        }
        return redirect()->route('partners.list');
    }
}
