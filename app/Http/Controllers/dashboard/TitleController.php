<?php

namespace App\Http\Controllers\dashboard;

use App\Http\Controllers\Controller;
use App\Models\Title;
use App\Traits\upload_imgs;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class TitleController extends Controller
{
    use upload_imgs;
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $titles = Title::all();
        return view('backend.dashboard.titles.index', compact('titles'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.dashboard.titles.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'place' => 'required|unique:titles',
        ]);
        try{
            Title::create([
                'title' => $request->title,
                'description' => $request->description,
                'place' => $request->place,
                'photo' =>  $this->uploadImg($request, 'photo', 'TitleImgs', 'titles', 'upload_imgs')
            ]);
            return redirect()->route('titles.index')->with(['message' => 'Entery Added Successfully']);
        }catch(Exception $e){
            Log::info($e->getMessage());
            return redirect()->route('titles.index')->with(['message' => $e->getMessage() ]);
        }
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $title = Title::findOrFail($id);
        return view('backend.dashboard.titles.edit', compact('title'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required',
            'place' => 'required|unique:titles'
        ]);
        try{
            $Title = Title::findOrFail($id);
            $Title->title = $request->title;
            $Title->place = $request->place;
            $Title->description = $request->description;
            if($request->has('photo')){
                if($Title->photo){
                    $oldImg = $Title->photo;
                    $Title->photo = $this->deleteImg('upload_imgs', $oldImg);
                }
            $Title->photo = $this->uploadImg($request, 'photo', 'TitleImgs', 'titles', 'upload_imgs');
            }
            $Title->save();
            return redirect()->route('titles.index')->with(['message' => 'Entery Updated Successfully']);
        }catch(Exception $e){
            Log::info($e->getMessage());
            return redirect()->route('titles.index')->with(['message' => $e->getMessage() ]);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        try{
            $Title = Title::findOrFail($id);
            if($Title->photo){
                $oldImg = $Title->photo;
                $this->deleteImg('upload_imgs', $oldImg);
            }
            $Title->delete();
            return redirect()->route('titles.index')->with(['message' => 'Entery is Deleted Successfully']);
        }catch(Exception $e){
            Log::info($e->getMessage());
            return redirect()->route('titles.index')->with(['message' => $e->getMessage() ]);
        }
    }
}
