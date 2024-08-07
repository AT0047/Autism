<?php

namespace App\Traits;

use App\Models\MyStory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

trait upload_imgs{

    public function uploadImg(Request $request, $inputname, $foldername,  $photoname, $disk){
        if($request->hasFile($inputname)){
            $photo = $request->file($inputname);
            $name = \Str::slug(now(). $photoname);
            $filename = $name.'.'.$photo->extension();
            return $request->file($inputname)->storeAs($foldername, $filename, $disk);
        }
        return null;
    }
    public function deleteImg($disk, $path){
        Storage::disk($disk)->delete($path);
    }
}