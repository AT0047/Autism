<?php

namespace App\Http\Controllers\dashboard;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Traits\upload_imgs;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class CategoryController extends Controller
{
    use upload_imgs;

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categories = Category::orderBy('created_at', 'desc')->paginate(5);
        return view('backend.dashboard.categories.index', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.dashboard.categories.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'ar_name' => 'required',
            'en_name' => 'required',
            'photo' => 'required|image',
        ]);

        try {
            Category::create([
                'ar_name' => $request->ar_name,
                'en_name' => $request->en_name,
                'photo' => $this->uploadImg($request, 'photo', 'CategoryImgs', 'categories', 'upload_imgs')
            ]);

            return redirect()->route('categories.index')->with('message', 'Entry Added Successfully');
        } catch (Exception $e) {
            Log::info($e->getMessage());
            return redirect()->route('categories.index')->with('message', $e->getMessage());
        }
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $category = Category::findOrFail($id);
        return view('backend.dashboard.categories.edit', compact('category'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'ar_name' => 'required',
            'en_name' => 'required',
            'photo' => 'image',
        ]);

        $category = Category::findOrFail($id);

        try {
            $category->ar_name = $request->ar_name;
            $category->en_name = $request->en_name;

            if ($request->has('photo')) {
                if ($category->photo) {
                    $oldImg = $category->photo;
                    $this->deleteImg('upload_imgs', $oldImg);
                }
                $category->photo = $this->uploadImg($request, 'photo', 'CategoryImgs', 'categories', 'upload_imgs');
            }

            $category->save();

            return redirect()->route('categories.index')->with('message', 'Entry Updated Successfully');
        } catch (Exception $e) {
            Log::info($e->getMessage());
            return redirect()->route('categories.index')->with('message', $e->getMessage());
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        try {
            $category = Category::findOrFail($id);
            if ($category->photo) {
                $oldImg = $category->photo;
                $this->deleteImg('upload_imgs', $oldImg);
            }
            $category->delete();

            return redirect()->route('categories.index')->with('message', 'Entry Deleted Successfully');
        } catch (Exception $e) {
            Log::info($e->getMessage());
            return redirect()->route('categories.index')->with('message', $e->getMessage());
        }
    }
}
