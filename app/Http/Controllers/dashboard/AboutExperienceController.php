<?php

namespace App\Http\Controllers\dashboard;

use App\Http\Controllers\Controller;
use App\Http\Requests\AboutExperienceRequest;
use App\Models\AboutExperience;
use Illuminate\Http\Request;

class AboutExperienceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $about_experiences=AboutExperience::all();
        return view('backend.dashboard.about-us.about-experience.index',compact('about_experiences'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.dashboard.about-us.about-experience.create');

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(AboutExperienceRequest $request)
    {
        AboutExperience::create($request->all());

        return redirect()->route('about-experience.index')->with('success', 'Data saved successfully');

    }

    /**
     * Display the specified resource.
     */
    public function show(AboutExperience $aboutExperience)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(AboutExperience $aboutExperience)
    {
        return view('backend.dashboard.about-us.about-experience.edit',compact('aboutExperience'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(AboutExperienceRequest $request, AboutExperience $aboutExperience)
    {
        $aboutExperience->update($request->all());

        return redirect()->route('about-experience.index')->with('success', 'Data saved successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(AboutExperience $aboutExperience)
    {
        $aboutExperience->delete();
        return redirect()->route('about-experience.index')->with('success', 'Data deleted successfully');
    }
}
