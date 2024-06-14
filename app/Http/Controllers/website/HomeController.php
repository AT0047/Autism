<?php

namespace App\Http\Controllers\website;

use App\Http\Controllers\Controller;
use App\Models\AboutUs;
use App\Models\Book;
use App\Models\MyStory;
use App\Models\OurService;
use App\Models\PeopleStory;
use App\Models\Title;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home(){
        // ----------------- Title ------------------
        $homeTitle = Title::first();

        // ----------------- My Store ------------------
        $myStory = MyStory::first();


        // ----------------- Our Services ------------------
        $ourServices = OurService::all();

        // ----------------- People Stories ------------------
        $peopleStories = PeopleStory::all();
        // ----------------- About us ------------------
        $aboutUs = AboutUs::first();



        // ----------------- News ------------------
        $preferredBooks = Book::where('prefer',1)->get(); 


        return view('frontend.home_personal',[
            'myStory' => $myStory,
            'ourServices' => $ourServices,
            'peopleStories' => $peopleStories,
            'homeTitle' => $homeTitle,
            'aboutUs' => $aboutUs,
            'preferredBooks' => $preferredBooks
        ]);
    }
}
