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
        $mystories = MyStory::orderBy('created_at', 'desc')->paginate(5);
        return view('backend.dashboard.my_story.index', compact('mystories'));
    }
    
    public function create(){
        return view('backend.dashboard.my_story.create');
    }

    public function store(Request $request){
        $request->validate([
            'ar_title1' => 'required|string|max:255',
            'en_title1' => 'required|string|max:255',
            'ar_title2' => 'nullable|string|max:255',
            'en_title2' => 'nullable|string|max:255',
            'ar_content' => 'nullable|string',
            'en_content' => 'nullable|string',
            'photo1' => 'required|image',
            'photo2' => 'required|image',
            'photo3' => 'required|image',
        ]);

        try{
            MyStory::create([
                'ar_title1' => $request->ar_title1,
                'en_title1' => $request->en_title1,
                'ar_title2' => $request->ar_title2,
                'en_title2' => $request->en_title2,
                'ar_content' => $request->ar_content,
                'en_content' => $request->en_content,
                'photo1' => $this->uploadImg($request, 'photo1', 'myStoryImgs', 'my_story1','upload_imgs'),
                'photo2' => $this->uploadImg($request, 'photo2', 'myStoryImgs', 'my_story2','upload_imgs'),
                'photo3' => $this->uploadImg($request, 'photo3', 'myStoryImgs', 'my_story3','upload_imgs'),
            ]);
            return redirect()->route('mystory.index')->with(['message' => 'Entry Added Successfully']);
        }catch(Exception $e){
            Log::info($e->getMessage());
            return redirect()->route('mystory.index')->with(['message' => $e->getMessage()]);
        }
    }

    public function edit($id){
        $mystory = MyStory::findOrFail($id);
        return view('backend.dashboard.my_story.edit', compact('mystory'));
    }

    public function update(Request $request, $id){
        $request->validate([
            'ar_title1' => 'required|string|max:255',
            'en_title1' => 'required|string|max:255',
            'ar_title2' => 'nullable|string|max:255',
            'en_title2' => 'nullable|string|max:255',
            'ar_content' => 'nullable|string',
            'en_content' => 'nullable|string',
            'photo1' => 'image',
            'photo2' => 'image',
            'photo3' => 'image',
        ]);

        try{
            $mystory = MyStory::findOrFail($id);
            $mystory->ar_title1 = $request->ar_title1;
            $mystory->en_title1 = $request->en_title1;
            $mystory->ar_title2 = $request->ar_title2;
            $mystory->en_title2 = $request->en_title2;
            $mystory->ar_content = $request->ar_content;
            $mystory->en_content = $request->en_content;

            if($request->has('photo1')){
                if($mystory->photo1){
                    $this->deleteImg('upload_imgs', $mystory->photo1);
                }
                $mystory->photo1 = $this->uploadImg($request, 'photo1', 'myStoryImgs', 'my_story1', 'upload_imgs');
            }
            if($request->has('photo2')){
                if($mystory->photo2){
                    $this->deleteImg('upload_imgs', $mystory->photo2);
                }
                $mystory->photo2 = $this->uploadImg($request, 'photo2', 'myStoryImgs', 'my_story2', 'upload_imgs');
            }
            if($request->has('photo3')){
                if($mystory->photo3){
                    $this->deleteImg('upload_imgs', $mystory->photo3);
                }
                $mystory->photo3 = $this->uploadImg($request, 'photo3', 'myStoryImgs', 'my_story3', 'upload_imgs');
            }

            $mystory->save();
            return redirect()->route('mystory.index')->with(['message' => 'Entry Updated Successfully']);
        }catch(Exception $e){
            Log::info($e->getMessage());
            return redirect()->route('mystory.index')->with(['message' => $e->getMessage()]);
        }
    }

    public function destroy($id){
        try{
            $mystory = MyStory::findOrFail($id);
            if($mystory->photo1){
                $this->deleteImg('upload_imgs', $mystory->photo1);
            }
            if($mystory->photo2){
                $this->deleteImg('upload_imgs', $mystory->photo2);
            }
            if($mystory->photo3){
                $this->deleteImg('upload_imgs', $mystory->photo3);
            }
            $mystory->delete();
            return redirect()->route('mystory.index')->with(['message' => 'Entry Deleted Successfully']);
        }catch(Exception $e){
            Log::info($e->getMessage());
            return redirect()->route('mystory.index')->with(['message' => $e->getMessage()]);
        }
    }
}
