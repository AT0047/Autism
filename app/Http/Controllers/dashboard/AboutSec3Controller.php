<?php

namespace App\Http\Controllers\dashboard;

use App\Http\Controllers\Controller;
use App\Http\Requests\AboutSec3Request;
use App\Models\AboutSec3;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AboutSec3Controller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $aboutSec3Items = AboutSec3::all();
        return view('backend.dashboard.about-us.about-sec3.index', compact('aboutSec3Items'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.dashboard.about-us.about-sec3.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(AboutSec3Request $request)
    {
        $data = $request->except('photo');
        // Handling photo upload
        if ($request->hasFile('photo')) {
            $data['photo'] = $request->file('photo')->store('about-sec3', 'public');
        }
        AboutSec3::create($data);
        return redirect()->route('about-sec3.index')->with('success', 'Data saved successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(AboutSec3 $aboutSec3)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(AboutSec3 $aboutSec3)
    {
        return view('backend.dashboard.about-us.about-sec3.edit', compact('aboutSec3'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(AboutSec3Request $request, $id)
    {
        $aboutSec3 = AboutSec3::findOrFail($id);

        $data = $request->except('photo');

        // Handling photo upload
        if ($request->hasFile('photo')) {
            // Delete previous photo
            Storage::disk('public')->delete($aboutSec3->photo);
            // Store new photo
            $data['photo'] = $request->file('photo')->store('about-sec3', 'public');
        }

        $aboutSec3->update($data);

        return redirect()->route('about-sec3.index')->with('success', 'Data saved successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(AboutSec3 $aboutSec3)
    {
        // Delete associated photo
        if ($aboutSec3->photo) {
            Storage::disk('public')->delete($aboutSec3->photo);
        }
        $aboutSec3->delete();
        return redirect()->route('about-sec3.index')->with('success', 'Data deleted successfully.');
    }
}
