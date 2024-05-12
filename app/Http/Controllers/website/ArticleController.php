<?php

namespace App\Http\Controllers\website;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Library;
use App\Models\Title;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function articles(){
        // ----------------- Title ------------------
        $title = Title::where('place', 'articles')->first();

        // ----------------- Library ------------------
        $libraries = Library::all();

        // ----------------- Categories ------------------
        $categories = Category::all();

        return view('frontend.articles.articles',[
            'libraries' => $libraries,
            'title' => $title,
            'categories' => $categories
        ]);
    }
}
