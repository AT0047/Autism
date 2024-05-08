<?php

namespace App\Http\Controllers\website;

use App\Http\Controllers\Controller;
use App\Models\Library;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function articles(){
        $libraries = Library::all();
        return view('frontend.articles.articles',[
            'libraries' => $libraries,
        ]);
    }
}
