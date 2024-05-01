<?php

namespace App\Http\Controllers\dashboard;

use App\Http\Controllers\Controller;
use App\Http\Requests\AboutEducationRequest;
use App\Models\AboutEducation;
use Illuminate\Http\Request;

class AboutEducationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $about_education=AboutEducation::all();
        return view('backend.dashboard.about-us.about-education.index',compact('about_education'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.dashboard.about-us.about-education.create');

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(AboutEducationRequest $request)
    {
        AboutEducation::create($request->all());

        return redirect()->route('about-education.index')->with('success', 'Data saved successfully');

    }

    /**
     * Display the specified resource.
     */
    public function show(AboutEducation $aboutEducation)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(AboutEducation $aboutEducation)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, AboutEducation $aboutEducation)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(AboutEducation $aboutEducation)
    {
        //
    }
}
