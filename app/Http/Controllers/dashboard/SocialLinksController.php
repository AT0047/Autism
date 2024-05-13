<?php

namespace App\Http\Controllers\dashboard;

use App\Http\Controllers\Controller;
use App\Models\SocialLinks;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class SocialLinksController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $socialLinks = SocialLinks::orderBy('platform')->paginate(6);
        return view('backend.dashboard.social_links.index', compact('socialLinks'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.dashboard.social_links.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $request->validate([
            'platform' => 'required',
            'link' => 'required',
        ]);
        try{
            SocialLinks::create([
                'platform' => $request->platform,
                'link' => $request->link,
            ]);
            return redirect()->route('social-links.index')->with(['message' => 'Entery Added Successfully']);
        }catch(Exception $e){
            Log::info($e->getMessage());
            return redirect()->route('social_links.index')->with(['message' => $e->getMessage()]);
        }
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $socialLink = SocialLinks::findOrFail($id);
        return view('backend.dashboard.social_links.edit', compact('socialLink'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'platform' => 'required',
            'link' => 'required',
        ]);
        $socialLink = SocialLinks::findOrFail($id);
        try{
            $socialLink->update([
                'platform' => $request->platform,
                'link' => $request->link,
            ]);
            return redirect()->route('social-links.index')->with(['message' => 'Entery Updated Successfully']);
        }catch(Exception $e){
            Log::info($e->getMessage());
            return redirect()->route('social_links.index')->with(['message' => $e->getMessage()]);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        try{
            SocialLinks::findOrFail($id)->delete();
            return redirect()->route('social-links.index')->with(['message' => 'Entery Deleted Successfully']);
        }catch(Exception $e){
            Log::info($e->getMessage());
            return redirect()->route('social_links.index')->with(['message' => $e->getMessage()]);
        }
    }
}
