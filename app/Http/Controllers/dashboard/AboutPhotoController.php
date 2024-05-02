<?php

namespace App\Http\Controllers\dashboard;

use App\Http\Controllers\Controller;
use App\Http\Requests\AboutPhotosRequest;
use App\Models\AboutPhoto;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AboutPhotoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $aboutPhoto=AboutPhoto::first();
        return view('backend.dashboard.about-us.about-photos.index',compact('aboutPhoto'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.dashboard.about-us.about-photos.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(AboutPhotosRequest $request)
    {
        $sec1_videoPath = $request->file('sec1_video')->store('about_photos', 'public');
        $sec1_photoPath = $request->file('sec1_photo')->store('about_photos', 'public');
        $sec2_photoPath = $request->file('sec2_photo')->store('about_photos', 'public');
        $sec4_photoPath = $request->file('sec4_photo')->store('about_photos', 'public');
        if ($request->hasFile('logo')) {
            $logoPath = $request->file('logo')->store('about_photos','public');
        }
    
        $aboutPhoto = new AboutPhoto([
            'sec1_video' => $sec1_videoPath,
            'sec1_photo' => $sec1_photoPath,
            'sec2_photo' => $sec2_photoPath,
            'sec4_photo' => $sec4_photoPath,
            'logo' => $logoPath ?? '',
        ]);
    
        $aboutPhoto->save();
    
        // Redirect the user back with a success message
        return redirect()->route('about-photos.index')->with('success', 'About photos added successfully');
    
    }

    /**
     * Display the specified resource.
     */
    public function show(AboutPhoto $aboutPhoto)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(AboutPhoto $aboutPhoto)
    {
        return view('backend.dashboard.about-us.about-photos.edit',compact('aboutPhoto'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, AboutPhoto $aboutPhoto)
    {
        $validatedData = $request->validate([
            'sec1_video' => 'required|file|mimes:mp4,mov,avi',
            'sec1_photo' => 'image|mimes:jpeg,png,jpg,gif',
            'sec2_photo' => 'image|mimes:jpeg,png,jpg,gif',
            'sec4_photo' => 'image|mimes:jpeg,png,jpg,gif',
            'logo' => 'image|mimes:jpeg,png,jpg,gif',

        ]);
        $aboutPhoto->sec1_video = $validatedData['sec1_video'];

        if ($request->hasFile('sec1_video')) {
            Storage::disk('public')->delete($aboutPhoto->sec1_video);
            $aboutPhoto->sec1_video = $request->file('sec1_video')->store('about_photos', 'public');
        }
        if ($request->hasFile('sec1_photo')) {
            Storage::disk('public')->delete($aboutPhoto->sec1_photo);
            $aboutPhoto->sec1_photo = $request->file('sec1_photo')->store('about_photos', 'public');
        }

        if ($request->hasFile('sec2_photo')) {
            Storage::disk('public')->delete($aboutPhoto->sec2_photo);
            $aboutPhoto->sec2_photo = $request->file('sec2_photo')->store('about_photos', 'public');
        }

        if ($request->hasFile('sec4_photo')) {
            Storage::disk('public')->delete($aboutPhoto->sec4_photo);
            $aboutPhoto->sec4_photo = $request->file('sec4_photo')->store('about_photos', 'public');
        }

        if ($request->hasFile('logo')) {
            Storage::disk('public')->delete($aboutPhoto->logo);
            $aboutPhoto->logo = $request->file('logo')->store('about_photos', 'public');
        }

        $aboutPhoto->save();

        return redirect()->route('about-photos.index')->with('success', 'About photos updated successfully');
    }


    

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(AboutPhoto $aboutPhoto)
    {
        Storage::disk('public')->delete([$aboutPhoto->sec1_photo, $aboutPhoto->sec2_photo, $aboutPhoto->sec4_photo, $aboutPhoto->logo]);
        $aboutPhoto->delete();
        return redirect()->route('about-photos.index')->with('success', 'Data deleted successfully');

    }
}
