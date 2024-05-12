<?php

namespace App\Http\Controllers\website;

use App\Http\Controllers\Controller;
use App\Models\MyStory;
use App\Models\OurService;
use App\Models\PeopleStory;
use App\Models\Title;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home(){
        // ----------------- Title ------------------
        $homeTitle = Title::where('place', 'home')->first();

        // ----------------- My Store ------------------
        $myStory1 = MyStory::where('title1','!=', '')->lazy()->first();
        $myStory2 = MyStory::where('title2','!=', '')->first();
        $myStory3 = MyStory::where('content','!=', '')->first();

        // ----------------- Our Services ------------------
        $ourServices = OurService::all();

        // ----------------- People Stories ------------------
        $peopleStories = PeopleStory::all();

        return view('frontend.home_personal',[
            'myStory1' => $myStory1,
            'myStory2' => $myStory2,
            'myStory3' => $myStory3,
            'ourServices' => $ourServices,
            'peopleStories' => $peopleStories,
            'homeTitle' => $homeTitle
        ]);
    }
}
