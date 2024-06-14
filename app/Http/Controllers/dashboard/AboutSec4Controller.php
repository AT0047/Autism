<?php

namespace App\Http\Controllers\dashboard;

use App\Http\Controllers\Controller;
use App\Http\Requests\AboutSec4Request;
use App\Models\AboutSec4;
use Illuminate\Http\Request;

class AboutSec4Controller extends Controller
{
    public function index()
    {
        $aboutSec4Items=AboutSec4::all();
        return view('backend.dashboard.about-us.about-sec4.index',compact('aboutSec4Items'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.dashboard.about-us.about-sec4.create');

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(AboutSec4Request $request)
    {
        AboutSec4::create($request->all());

        return redirect()->route('about-sec4.index')->with('success', 'Data saved successfully');

    }

    /**
     * Display the specified resource.
     */
    public function show(AboutSec4 $aboutSec4)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(AboutSec4 $aboutSec4)
    {
        return view('backend.dashboard.about-us.about-sec4.edit',compact('aboutSec4'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, AboutSec4 $aboutSec4)
    {
        $aboutSec4->update($request->all());

        return redirect()->route('about-sec4.index')->with('success', 'Data saved successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(AboutSec4 $aboutSec4)
    {
        $aboutSec4->delete();
        return redirect()->route('about-sec4.index')->with('success', 'Data deleted successfully');
    }
}
