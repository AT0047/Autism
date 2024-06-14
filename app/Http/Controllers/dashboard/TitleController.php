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
            'ar_title' => 'required|string|max:255',
            'en_title' => 'required|string|max:255',
            'ar_description' => 'nullable|string',
            'en_description' => 'nullable|string',
            'ar_photo' => 'required|image',
            'en_photo' => 'required|image',
            'home_photo' => 'required|image',
        ]);

        try {
            Title::create([
                'ar_title' => $request->ar_title,
                'en_title' => $request->en_title,
                'ar_description' => $request->ar_description,
                'en_description' => $request->en_description,
                'ar_photo' => $request->has('ar_photo') ? $this->uploadImg($request, 'ar_photo', 'TitleImgs', 'ar_photo', 'upload_imgs') : null,
                'en_photo' => $request->has('en_photo') ? $this->uploadImg($request, 'en_photo', 'TitleImgs', 'en_photo', 'upload_imgs') : null,
                'home_photo' => $request->has('home_photo') ? $this->uploadImg($request, 'home_photo', 'TitleImgs', 'home_photo', 'upload_imgs') : null,
            ]);
            return redirect()->route('titles.index')->with(['message' => 'Entry Added Successfully']);
        } catch (Exception $e) {
            Log::info($e->getMessage());
            return redirect()->route('titles.index')->with(['message' => $e->getMessage()]);
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
            'ar_title' => 'required|string|max:255',
            'en_title' => 'required|string|max:255',
            'ar_description' => 'nullable|string',
            'en_description' => 'nullable|string',
            'ar_photo' => 'image',
            'en_photo' => 'image',
            'home_photo' => 'image',
        ]);

        try {
            $title = Title::findOrFail($id);
            $title->ar_title = $request->ar_title;
            $title->en_title = $request->en_title;
            $title->ar_description = $request->ar_description;
            $title->en_description = $request->en_description;

            if ($request->has('ar_photo')) {
                if ($title->ar_photo) {
                    $this->deleteImg('upload_imgs', $title->ar_photo);
                }
                $title->ar_photo = $this->uploadImg($request, 'ar_photo', 'TitleImgs', 'ar_photo', 'upload_imgs');
            }

            if ($request->has('en_photo')) {
                if ($title->en_photo) {
                    $this->deleteImg('upload_imgs', $title->en_photo);
                }
                $title->en_photo = $this->uploadImg($request, 'en_photo', 'TitleImgs', 'en_photo', 'upload_imgs');
            }
            if ($request->has('home_photo')) {
                if ($title->home_photo) {
                    $this->deleteImg('upload_imgs', $title->home_photo);
                }
                $title->home_photo = $this->uploadImg($request, 'home_photo', 'TitleImgs', 'home_photo', 'upload_imgs');
            }

            $title->save();
            return redirect()->route('titles.index')->with(['message' => 'Entry Updated Successfully']);
        } catch (Exception $e) {
            Log::info($e->getMessage());
            return redirect()->route('titles.index')->with(['message' => $e->getMessage()]);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        try {
            $title = Title::findOrFail($id);
            if ($title->ar_photo) {
                $this->deleteImg('upload_imgs', $title->ar_photo);
            }
            if ($title->en_photo) {
                $this->deleteImg('upload_imgs', $title->en_photo);
            }
            if ($title->home_photo) {
                $this->deleteImg('upload_imgs', $title->home_photo);
            }
            $title->delete();
            return redirect()->route('titles.index')->with(['message' => 'Entry Deleted Successfully']);
        } catch (Exception $e) {
            Log::info($e->getMessage());
            return redirect()->route('titles.index')->with(['message' => $e->getMessage()]);
        }
    }
}
