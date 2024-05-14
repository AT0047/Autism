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
        $mystories = MyStory::get();
        return view('backend.dashboard.my_story.index', compact('mystories'));
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
                'photo1' =>  $this->uploadImg($request, 'photo1', 'myStoryImgs', 'my_story1','upload_imgs'),
                'photo2' =>  $this->uploadImg($request, 'photo2', 'myStoryImgs', 'my_story2','upload_imgs'),
                'photo3' =>  $this->uploadImg($request, 'photo3', 'myStoryImgs', 'my_story3','upload_imgs'),
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
        // dd($request->all());
        try{
            $mystory = MyStory::findOrFail($id);
            $mystory->title1 = $request->titel1;
            $mystory->title2 = $request->titel2;
            $mystory->content = $request->content;
            if($request->has('photo1')){
                if($mystory->photo1){
                    $oldImg1 = $mystory->photo1;
                    $mystory->photo1 = $this->deleteImg('upload_imgs', $oldImg1);
                }
            $mystory->photo1 = $this->uploadImg($request, 'photo1', 'myStoryImgs', 'my_story1', 'upload_imgs');
            }
            if($request->has('photo2')){
                if($mystory->photo2){
                    $oldImg2 = $mystory->photo2;
                    $mystory->photo2 = $this->deleteImg('upload_imgs', $oldImg2);
                }
            $mystory->photo2 = $this->uploadImg($request, 'photo2', 'myStoryImgs', 'my_story2', 'upload_imgs');
            }
            if($request->has('photo3')){
                if($mystory->photo3){
                    $oldImg3 = $mystory->photo3;
                    $mystory->photo3 = $this->deleteImg('upload_imgs', $oldImg3);
                }
            $mystory->photo3 = $this->uploadImg($request, 'photo3', 'myStoryImgs', 'my_story3', 'upload_imgs');
            }
            $mystory->save();
            return redirect()->route('mystory.index')->with(['message' => 'Entery Updated Successfull']);
        }catch(Exception $e){
            Log::info($e->getMessage());
            return redirect()->route('mystory.index')->with(['message' => $e->getMessage() ]);
        }
    }
    

    public function destroy($id){
        try{
            $mystory = MyStory::findOrFail($id);
            if($mystory->photo1){
                $oldImg = $mystory->photo1;
                $this->deleteImg('upload_imgs', $oldImg);
            }
            if($mystory->photo2){
                $oldImg = $mystory->photo2;
                $this->deleteImg('upload_imgs', $oldImg);
            }
            if($mystory->photo3){
                $oldImg = $mystory->photo3;
                $this->deleteImg('upload_imgs', $oldImg);
            }
            $mystory->delete();
            return redirect()->route('mystory.index')->with(['message' => 'Entery is Deleted Successfully']);
        }catch(Exception $e){
            Log::info($e->getMessage());
            return redirect()->route('mystory.index')->with(['message' => $e->getMessage() ]);
        }
    }
}
