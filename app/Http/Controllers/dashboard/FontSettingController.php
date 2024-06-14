<?php

namespace App\Http\Controllers\dashboard;

use App\Http\Controllers\Controller;
use App\Models\FontSetting;
use Illuminate\Http\Request;

class FontSettingController extends Controller
{
    public function create()
    {
        $fontSetting = FontSetting::first();
        return view('backend.dashboard.font-settings.form', compact('fontSetting'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'ar_font_family' => 'required|string|max:255',
            'ar_font_size' => 'required|string|max:255',
            'en_font_family' => 'required|string|max:255',
            'en_font_size' => 'required|string|max:255',
        ]);

        FontSetting::create($request->all());

        return redirect()->back()->with('success', 'Font settings created successfully.');
    }

    public function edit(FontSetting $fontSetting)
    {
        return view('backend.dashboard.font-settings.form', compact('fontSetting'));
    }

    public function update(Request $request, FontSetting $fontSetting)
    {
        $request->validate([
            'ar_font_family' => 'required|string|max:255',
            'ar_font_size' => 'required|string|max:255',
            'en_font_family' => 'required|string|max:255',
            'en_font_size' => 'required|string|max:255',
        ]);

        $fontSetting->update($request->all());

        return redirect()->back()->with('success', 'Font settings updated successfully.');
    }

}
