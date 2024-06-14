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
        $request->validate([
            'ar_name' => 'required|string|max:255',
            'en_name' => 'required|string|max:255',
            'ar_title' => 'required|string|max:255',
            'en_title' => 'required|string|max:255',
            'ar_content' => 'required|string',
            'en_content' => 'required|string',
            'photo' => 'required|image',
        ]);

        try {
            PeopleStory::create([
                'ar_name' => $request->ar_name,
                'en_name' => $request->en_name,
                'ar_job' => $request->ar_job,
                'en_job' => $request->en_job,
                'ar_title' => $request->ar_title,
                'en_title' => $request->en_title,
                'ar_content' => $request->ar_content,
                'en_content' => $request->en_content,
                'photo' => $this->uploadImg($request, 'photo', 'peopleStoriesImgs', 'people_stories', 'upload_imgs')
            ]);
            return redirect()->route('people-stories.index')->with(['message' => 'Entry Added Successfully']);
        } catch (Exception $e) {
            Log::info($e->getMessage());
            return redirect()->route('people-stories.index')->with(['message' => $e->getMessage()]);
        }
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $peopleStory = PeopleStory::findOrFail($id);
        return view('backend.dashboard.people_stories.edit', compact('peopleStory'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'ar_name' => 'required|string|max:255',
            'en_name' => 'required|string|max:255',
            'ar_title' => 'required|string|max:255',
            'en_title' => 'required|string|max:255',
            'ar_content' => 'required|string',
            'en_content' => 'required|string',
            'photo' => 'image',
        ]);

        try {
            $peopleStory = PeopleStory::findOrFail($id);
            $peopleStory->ar_name = $request->ar_name;
            $peopleStory->en_name = $request->en_name;
            $peopleStory->ar_job = $request->ar_job;
            $peopleStory->en_job = $request->en_job;
            $peopleStory->ar_title = $request->ar_title;
            $peopleStory->en_title = $request->en_title;
            $peopleStory->ar_content = $request->ar_content;
            $peopleStory->en_content = $request->en_content;

            if ($request->has('photo')) {
                if ($peopleStory->photo) {
                    $this->deleteImg('upload_imgs', $peopleStory->photo);
                }
                $peopleStory->photo = $this->uploadImg($request, 'photo', 'peopleStoriesImgs', 'people_stories', 'upload_imgs');
            }

            $peopleStory->save();
            return redirect()->route('people-stories.index')->with(['message' => 'Entry Updated Successfully']);
        } catch (Exception $e) {
            Log::info($e->getMessage());
            return redirect()->route('people-stories.index')->with(['message' => $e->getMessage()]);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        try {
            $peopleStory = PeopleStory::findOrFail($id);
            if ($peopleStory->photo) {
                $this->deleteImg('upload_imgs', $peopleStory->photo);
            }
            $peopleStory->delete();
            return redirect()->route('people-stories.index')->with(['message' => 'Entry Deleted Successfully']);
        } catch (Exception $e) {
            Log::info($e->getMessage());
            return redirect()->route('people-stories.index')->with(['message' => $e->getMessage()]);
        }
    }
}
