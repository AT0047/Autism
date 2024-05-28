<?php

namespace App\Traits;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

trait upload_vidoes{

    public function uploadVids(Request $request, $inputname, $foldername,  $videoname, $disk){
        if($request->hasFile($inputname)){
            $video = $request->file($inputname);
            $name = \Str::slug(now(). $videoname);
            $filename = $name.'.'.$video->extension();
            return $request->file($inputname)->storeAs($foldername, $filename, $disk);
        }
        return null;
    }
    public function deleteVids($disk, $path){
        Storage::disk($disk)->delete($path);
    }
}