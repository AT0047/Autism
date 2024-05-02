<?php

namespace App\Http\Controllers\dashboard;

use App\Http\Controllers\Controller;
use App\Models\PeopleStory;
use App\Traits\upload_imgs;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class PeopleStoryController extends Controller
{
    use upload_imgs;
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $peopleStories = PeopleStory::orderBy('created_at', 'desc')->paginate(5);
        return view('backend.dashboard.people_stories.index', compact('peopleStories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.dashboard.people_stories.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try{
            PeopleStory::create([
                'name' => $request->name,
                'job' => $request->job,
                'title,' => $request->title,
                'content' => $request->content,
                'photo' =>  $this->uploadImg($request, 'photo', 'peopleStoriesImgs', 'people_stories','upload_imgs')
            ]);
            return redirect()->route('people-stories.index')->with(['message' => 'Entery Added Successfully']);
        }catch(Exception $e){
            Log::info($e->getMessage());
            return redirect()->route('people-stories.index')->with(['message' => $e->getMessage() ]);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
