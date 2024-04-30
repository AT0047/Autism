<?php

namespace App\Http\Controllers\dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MyStoryController extends Controller
{
    public function index(){
        return view('backend.dashboard.my_story.index');
    }

    public function create(){
        return view('backend.dashboard.my_story.create');
    }
}
