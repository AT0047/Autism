<?php

namespace App\Http\Controllers\dashboard;

use App\Http\Controllers\Controller;
use App\Models\MyStory;
use App\Traits\upload_imgs;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

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
        try{
            MyStory::create([
                'title1' => $request->title1,
                'title2' => $request->title2,
                'content' => $request->content,
                'photo' =>  $this->uploadImg($request, 'photo', 'myStoryImgs', 'upload_imgs')
            ]);
            return redirect()->route('mystory.index')->with(['message' => 'Entery Added Successfully']);
        }catch(Exception $e){
            Log::info($e->getMessage());
            return redirect()->route('mystory.index')->with(['message' => $e->getMessage() ]);
        }
    }


    public function edit($id){
        $mystory = MyStory::findOrFail($id);
        return view('backend.dashboard.my_story.edit', compact('mystory'));
    }
    public function update(Request $request, $id){
        try{
            $mystory = MyStory::findOrFail($id);
            $mystory->title1 = $request->titel1;
            $mystory->title2 = $request->titel2;
            $mystory->content = $request->content;
            if($request->has('photo')){
                if($mystory->photo){
                    $oldImg = $mystory->photo;
                    $mystory->photo = $this->deleteImg('upload_imgs', $oldImg);
                }
            $mystory->photo = $this->uploadImg($request, 'photo', 'myStoryImgs', 'upload_imgs');
            }
            $mystory->save();
            return redirect()->route('mystory.index')->with(['message' => 'Entery Edit is Successfull']);
        }catch(Exception $e){
            Log::info($e->getMessage());
            return redirect()->route('mystory.index')->with(['message' => $e->getMessage() ]);
        }
    }
    

    public function destroy($id){
        try{
            MyStory::findOrFail($id)->delete();
            return redirect()->route('mystory.index')->with(['message' => 'Entery is Deleted Successfully']);
        }catch(Exception $e){
            Log::info($e->getMessage());
            return redirect()->route('mystory.index')->with(['message' => $e->getMessage() ]);
        }
    }
}
