<?php

namespace App\Traits;

use App\Models\MyStory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

trait upload_imgs{

    public function uploadImg(Request $request, $inputname, $foldername, $disk){
        if($request->hasFile($inputname)){
            $photo = $request->file($inputname);
            $name = \Str::slug(now().'myStory');
            $filename = $name.'.'.$photo->getClientOriginalExtension();
            return $request->file($inputname)->storeAs($foldername, $filename, $disk);
        }
        return null;
    }
    public function deleteImg($disk, $path){
        Storage::disk($disk)->delete($path);
    }
    
}