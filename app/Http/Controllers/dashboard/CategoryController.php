<?php

namespace App\Http\Controllers\dashboard;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Library;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class CategoryController extends Controller
{
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
        $libraries = Library::orderBy('name')->pluck('name', 'id')->toArray();
        return view('backend.dashboard.categories.create', compact('libraries'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'library_id' => 'required',
        ]);
        try{
            Category::create([
                'name' => $request->name,
                'library_id' => $request->library_id,
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
        $libraries = Library::orderBy('name')->pluck('name', 'id')->toArray();
        return view('backend.dashboard.categories.edit', compact('categories', 'libraries'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
            'library_id' => 'required',
        ]);
        $Category = Category::findOrFail($id);
        try{
            $Category->update([
                'name' => $request->name,
                'library_id' => $request->library_id,
            ]);
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
            Category::findOrFail($id)->delete();
            return redirect()->route('categories.index')->with('message', 'Entery Deleted Successfully');
        }catch(Exception $e){
            Log::info($e->getMessage());
            return redirect()->route('categories.index')->with('message', $e->getMessage());
        }
    }
}
