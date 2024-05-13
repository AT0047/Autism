<?php

namespace App\Http\Controllers\website;

use App\Http\Controllers\Controller;
use App\Models\Book;
use App\Models\BookQuestion;
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

        // ----------------- Books ------------------
        $books = Book::all();

        return view('frontend.articles.articles',[
            'libraries' => $libraries,
            'title' => $title,
            'categories' => $categories,
            'books' => $books
        ]);
    }

    public function bookDetails($id){
        $books = Category::findOrFail($id)->books()->get();
        foreach($books as $book){
            $questions = Book::findOrFail($book->id)->questions();
        }
        return view('frontend.articles.blog_details', compact('books', 'questions'));
    }
}
