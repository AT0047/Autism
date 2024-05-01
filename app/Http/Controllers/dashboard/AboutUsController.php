<?php

namespace App\Http\Controllers\dashboard;

use App\Http\Controllers\Controller;
use App\Http\Requests\AboutUsRequest;
use App\Models\AboutUs;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AboutUsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $aboutUs = AboutUs::first();
        return view('backend.dashboard.about-us.index',compact('aboutUs'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(AboutUsRequest $request)
    {
        $data = $request->except('dr_photo');
        // Handling photo upload
        if ($request->hasFile('dr_photo')) {
            $data['dr_photo'] = $request->file('dr_photo')->store('aboutUs', 'public');
        }
        AboutUs::create($data);
        return redirect()->back()->with('success', 'Data saved successfully');

    }

    /**
     * Display the specified resource.
     */
    public function show(AboutUs $aboutUs)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(AboutUs $aboutUs)
    {
        return view('create_or_edit_about_us', compact('aboutUs'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(AboutUsRequest $request, $id)
    {
        $aboutUs=AboutUs::findOrFail($id);

        $data = $request->except('dr_photo');

        // Handling photo upload
        if ($request->hasFile('dr_photo')) {
            // Delete previous dr_photo
            Storage::disk('public')->delete($aboutUs->dr_photo);
            // Store new dr_photo
            $data['dr_photo'] = $request->file('dr_photo')->store('aboutUs', 'public');
        }

        $aboutUs->update($data);

        return redirect()->back()->with('success', 'Data saved successfully.');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(AboutUs $aboutUs)
    {
        //
    }
}
