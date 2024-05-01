<?php

namespace App\Http\Controllers\dashboard;

use App\Http\Controllers\Controller;
use App\Models\MyStory;
use App\Traits\upload_imgs;
use Illuminate\Http\Request;

class MyStoryController extends Controller
{
    use upload_imgs;
    public function index(){
        $mystorys = MyStory::orderBy('created_at', 'desc')->paginate(10);
        return view('backend.dashboard.my_story.index', compact('mystorys'));
    }

    public function create(){
        return view('backend.dashboard.my_story.create');
    }
    public function store(Request $request){
        $photo = $this->uploadImg($request, 'photo', 'mystory','myStoryImgs', 'upload_imgs');
        MyStory::create([
            'title1' => $request->title1,
            'title2' => $request->title2,
            'content' => $request->content,
            'photo' => $photo
        ]);
        return redirect()->route('mystory.index');
    }   
}
