<?php

namespace App\Http\Controllers;

use App\Models\Staff;
use App\Http\Requests\StoreStaffRequest;
use App\Http\Requests\UpdateStaffRequest;
use App\Models\User;
use Illuminate\Support\Facades\Log;
use Illuminate\Http\Request;

class StaffController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $all = User::all();
        return view('dashboard.pages.staff.list', compact('all'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.pages.staff.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $addNew = $request->validate([
            'name' => 'required|string',
            'email' => 'required|email',
        ]);

        Log::info($addNew);
        $insert = User::create([
            'name' =>$addNew['name'],
            'email' => $addNew['email'],
        ]);

        return redirect()->route('staff.list');
    }

    /**
     * Display the specified resource.
     */
    public function show(Staff $staff)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Staff $staff)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateStaffRequest $request, Staff $staff)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $delete = User::find($id);
        $delete->delete();
        return redirect()->route('staff.list');
    }

    public function deleted()
    {
        return view('dashboard.pages.staff.deleted');
    }
}
