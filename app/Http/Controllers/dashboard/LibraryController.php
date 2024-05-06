<?php

namespace App\Http\Controllers\dashboard;

use App\Http\Controllers\Controller;
use App\Models\Library;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class LibraryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $libraries = Library::orderBy('created_at', 'desc')->paginate(5);
        return view('backend.dashboard.libraries.index', compact('libraries'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.dashboard.libraries.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
        ]);
        try{
            Library::create([
                'name' => $request->name
            ]);
            return redirect()->route('libraries.index')->with('message', 'Entery Add Successfully');
        }catch(Exception $e){
            Log::info($e->getMessage());
            return redirect()->route('libraries.index')->with('message', $e->getMessage());
        }
    }

    public function edit($id)
    {
        $library = Library::findOrFail($id);
        return view('backend.dashboard.libraries.edit', compact('library'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
        ]);
        $library = Library::findOrFail($id);
        try{
            $library->update([
                'name' => $request->name
            ]);
            return redirect()->route('libraries.index')->with('message', 'Entery Updated Successfully');
        }catch(Exception $e){
            Log::info($e->getMessage());
            return redirect()->route('libraries.index')->with('message', $e->getMessage());
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        try{
            Library::findOrFail($id)->delete();
            return redirect()->route('libraries.index')->with('message', 'Entery Deleted Successfully');
        }catch(Exception $e){
            Log::info($e->getMessage());
            return redirect()->route('libraries.index')->with('message', $e->getMessage());
        }
    }
}
