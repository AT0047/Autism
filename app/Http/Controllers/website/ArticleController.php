<?php

namespace App\Http\Controllers\website;

use App\Http\Controllers\Controller;
use App\Models\AboutUs;
use App\Models\Book;
use App\Models\BookQuestion;
use App\Models\Category;
use App\Models\Library;
use App\Models\OurService;
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

        // ----------------- Our Services ------------------
        $ourServices = OurService::all();

        // ----------------- News ------------------
        $preferredBooks = Book::where('prefer',1)->get(); 

        return view('frontend.articles.articles',[
            'title' => $title,
            'libraries' => $libraries,
            'categories' => $categories,
            'books' => $books,
            'ourServices' => $ourServices,
            'preferredBooks' => $preferredBooks
        ]);
    }


    public function bookDetails($id){
        $bookdetails = Book::findOrFail($id); 
        $category = Book::where('category_id', $bookdetails->category_id)->get();
        $bookQuestions = BookQuestion::where('book_id', $id)->get();
        return view('frontend.articles.blog_details', compact('bookdetails', 'category', 'bookQuestions'));
    }


    public function libraryDetails($id){
        // ----------------- Title ------------------
        $title = Title::where('place', 'articles')->first();

        // ----------------- Library ------------------
        $libraries = Library::all();
        
        // ----------------- Library Content ------------------
        $libraryContent = Library::findOrFail($id);

        // ----------------- Library Content ------------------
        $libraryCategories = Category::where('library_id', $id)->get();

        foreach ($libraryCategories as $libraryCategory){
            $cate_id = $libraryCategory->id;
        }

        // ----------------- Library Books ------------------
        $libraryBooks = Library::where('id', $id)->with('categories.books')->get();

        // ----------------- Categories ------------------
        if (isset($cate_id)) {
            $preferred_Books = Book::where('category_id', $cate_id)->where('prefer', 1)->get();
        }

        // ----------------- Our Services ------------------
        $ourServices = OurService::all();

        // ----------------- News ------------------
        $preferredBooks = Book::where('prefer',1)->get(); 

        $aboutUs=AboutUs::first();

        return view('frontend.articles.library_content',[
            'title' => $title,
            'libraries' => $libraries,
            'libraryContent' => $libraryContent,
            'libraryCategories' => $libraryCategories,
            'libraryBooks' => $libraryBooks,
            'preferred_Books' => ($preferred_Books ?? ''),
            'ourServices' => $ourServices,
            'preferredBooks' => $preferredBooks,
            'aboutUs' => $aboutUs,
        ]); 
    }
}
