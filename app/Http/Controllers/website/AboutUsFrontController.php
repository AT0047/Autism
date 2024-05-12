<?php

namespace App\Http\Controllers\website;

use App\Http\Controllers\Controller;
use App\Http\Requests\AboutUsRequest;
use App\Models\AboutEducation;
use App\Models\AboutExperience;
use App\Models\AboutPhoto;
use App\Models\AboutSec3;
use App\Models\AboutSec4;
use App\Models\AboutUs;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AboutUsFrontController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
       $media=AboutPhoto::first();
       $aboutUs=AboutUs::first();
       $all_education=AboutEducation::get();
       $all_experience=AboutExperience::get();
       $aboutSec3=AboutSec3::take(4)->get();
       $aboutSec4=AboutSec4::take(6)->get();

        return view('frontend.about_me.about_me',compact('media','aboutUs','all_education','all_experience','aboutSec3','aboutSec4'));
    }

}
