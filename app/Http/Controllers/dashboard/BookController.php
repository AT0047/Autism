<?php

namespace App\Http\Controllers\dashboard;

use App\Http\Controllers\Controller;
use App\Jobs\SaveVideoJob;
use App\Models\Book;
use App\Models\Category;
use App\Traits\upload_imgs;
use App\Traits\upload_vidoes;
use Carbon\Carbon;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class BookController extends Controller
{
    use upload_imgs;
    use upload_vidoes;

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $books = Book::orderBy('display_order')->paginate(5);
        return view('backend.dashboard.books.index', compact('books'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::orderBy('en_name')->get();
        return view('backend.dashboard.books.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'ar_name' => 'required',
            'en_name' => 'required',
            'ar_content' => 'required',
            'en_content' => 'required',
            'category_id' => 'required',
            'prefer' => 'required',
            'publication_date' => 'required',
            'ar_author_name' => 'required',
            'en_author_name' => 'required',
            'display_order' => 'required|unique:books|numeric',
            'photo' => 'required|image',
            'video' => 'mimes:mp4,mov,ogg,qt,flv,avi,wmv,mkv,flv'
        ],[
            'category_id.required' => 'The category name is required.',
            'display_order.unique' => 'There are other articles with the same order.'
        ]);
        try {
            Book::create([
                'ar_name' => $request->ar_name,
                'en_name' => $request->en_name,
                'ar_content' => $request->ar_content,
                'en_content' => $request->en_content,
                'category_id' => $request->category_id,
                'prefer' => $request->prefer,
                'publication_date' => $request->publication_date,
                'ar_author_name' => $request->ar_author_name,
                'en_author_name' => $request->en_author_name,
                'display_order' => $request->display_order,
                'photo' => $this->uploadImg($request, 'photo', 'BookImgs', 'books', 'upload_imgs'),
                'video' => $this->uploadVids($request, 'video', 'BookImgs', 'books', 'upload_imgs'),
            ]);
            return redirect()->route('books.index')->with(['message' => 'Entry Added Successfully']);
        } catch (Exception $e) {
            Log::info($e->getMessage());
            return redirect()->route('books.index')->with(['message' => $e->getMessage()]);
        }
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $categories = Category::orderBy('en_name')->get();
        $book = Book::findOrFail($id);
        return view('backend.dashboard.books.edit', compact('categories', 'book'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $book = Book::findOrFail($id);
        $request->validate([
            'ar_name' => 'required',
            'en_name' => 'required',
            'ar_content' => 'required',
            'en_content' => 'required',
            'category_id' => 'required',
            'prefer' => 'required',
            'publication_date' => 'required',
            'ar_author_name' => 'required',
            'en_author_name' => 'required',
            'display_order' => $book->display_order == $request->display_order ? 'required|numeric': 'required|unique:books|numeric',
            'video' => 'mimes:mp4,mov,ogg,qt,flv,avi,wmv,mkv,flv',
            'photo' => 'image'
        ],[
            'category_id.required' => 'The category name is required.',
            'display_order.unique' => 'There are other articles with the same order.'
        ]);
        try {
            $book->ar_name = $request->ar_name;
            $book->en_name = $request->en_name;
            $book->ar_content = $request->ar_content;
            $book->en_content = $request->en_content;
            $book->category_id = $request->category_id;
            $book->prefer = $request->prefer;
            $book->publication_date = $request->publication_date;
            $book->ar_author_name = $request->ar_author_name;
            $book->en_author_name = $request->en_author_name;
            $book->display_order = $request->display_order;
            if($request->has('photo')){
                if($book->photo){
                    $oldImg = $book->photo;
                    $book->photo = $this->deleteImg('upload_imgs', $oldImg);
                }
                $book->photo = $this->uploadImg($request, 'photo', 'BookImgs', 'books', 'upload_imgs');
            }
            if($request->has('video')){
                if($book->video){
                    $oldVid = $book->video;
                    $book->video = $this->deleteVids('upload_imgs', $oldVid);
                }
                $book->video = $this->uploadVids($request, 'video', 'BookImgs', 'books', 'upload_imgs');
            }
            $book->save();
            return redirect()->route('books.index')->with(['message' => 'Entry Updated Successfully']);
        } catch (Exception $e) {
            Log::info($e->getMessage());
            return redirect()->route('books.index')->with(['message' => $e->getMessage()]);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        try{
            $book = Book::findOrFail($id);
            if($book->photo){
                $oldImg = $book->photo;
                $this->deleteImg('upload_imgs', $oldImg);
            }
            if($book->video){
                $oldVid = $book->video;
                $this->deleteVids('upload_imgs', $oldVid);
            }
            $book->delete();
            return redirect()->route('books.index')->with(['message' => 'Entry Deleted Successfully']);
        }catch(Exception $e){
            Log::info($e->getMessage());
            return redirect()->route('books.index')->with(['message' => $e->getMessage() ]);
        }
    }
}
