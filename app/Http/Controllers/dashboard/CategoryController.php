<?php

namespace App\Http\Controllers\dashboard;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Library;
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
            'name' => 'required',
            'photo' => 'required|image',
        ]);
        try{
            Category::create([
                'name' => $request->name,
                'photo' =>  $this->uploadImg($request, 'photo', 'CategoryImgs', 'categories','upload_imgs')
            ]);
            return redirect()->route('categories.index')->with('message', 'Entery Add Successfully');
        }catch(Exception $e){
            Log::info($e->getMessage());
            return redirect()->route('categories.index')->with('message', $e->getMessage());
        }
    }

    public function edit($id)
    {
        $categories = Category::findOrFail($id);
        return view('backend.dashboard.categories.edit', compact('categories'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
            'photo' => 'image',
        ]);
        $Category = Category::findOrFail($id);
        try{
            $Category->name = $request->name;
            if($request->has('photo')){
                if($Category->photo){
                    $oldImg = $Category->photo;
                    $Category->photo = $this->deleteImg('upload_imgs', $oldImg);
                }
            $Category->photo = $this->uploadImg($request, 'photo', 'CategoryImgs', 'categories','upload_imgs');
            }
            $Category->save();
            return redirect()->route('categories.index')->with('message', 'Entery Updated Successfully');
        }catch(Exception $e){
            Log::info($e->getMessage());
            return redirect()->route('categories.index')->with('message', $e->getMessage());
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        try{
            $Category = Category::findOrFail($id);
            if($Category->photo){
                $oldImg = $Category->photo;
                $this->deleteImg('upload_imgs', $oldImg);
            }
            $Category->delete();
            return redirect()->route('categories.index')->with('message', 'Entery Deleted Successfully');
        }catch(Exception $e){
            Log::info($e->getMessage());
            return redirect()->route('categories.index')->with('message', $e->getMessage());
        }
    }
}
