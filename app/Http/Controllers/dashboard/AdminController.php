<?php

namespace App\Http\Controllers\dashboard;

use App\Http\Controllers\Controller;
use App\Http\Requests\AdminRequest;
use App\Http\Requests\AdminUpdateRequest;
use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        $admins = User::all();
        return view('backend.dashboard.admins.index', compact('admins'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
    
        return view('backend.dashboard.admins.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(AdminRequest $request)
    {

        User::create($request->all());
        return redirect()->route('admins.index')->with('success', 'Data saved successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(User $admin)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $admin)
    {

        return view('backend.dashboard.admins.edit', compact('admin'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(AdminUpdateRequest $request, User $admin)
    {
        if ($request->password) {
         $admin->update($request->all());
        }else{
            $admin->update($request->except(['password','password_confirmation']));
        }
        return redirect()->route('admins.index')->with('success', 'Data saved successfully.');
        
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $admin)
    {

        $admin->delete();
        return redirect()->route('admins.index')->with('success', 'Data deleted successfully.');
    }
}
