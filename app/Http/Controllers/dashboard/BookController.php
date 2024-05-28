<?php

namespace App\Http\Controllers\dashboard;

use App\Http\Controllers\Controller;
use App\Jobs\SaveVideoJob;
use App\Models\Book;
use App\Models\Category;
use App\Models\Library;
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
        $categories = Category::orderBy('name')->get();
        return view('backend.dashboard.books.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'content' => 'required',
            'category_id' => 'required',
            'prefer' => 'required',
            'publication_date' => 'required',
            'author_name' => 'required',
            'display_order' => 'required|unique:books|numeric',
            'photo' => 'required|image',
            'video' => 'mimes:mp4,mov,ogg,qt,flv,avi,wmv,mkv,flv'
        ],[
            'category_id.required' => 'The category name is required.',
            'display_order.unique' => 'There are other articles with the same order.'
        ]);
        try {
            Book::create([
                'name' => $request->name,
                'content' => $request->content,
                'category_id' => $request->category_id,
                'prefer' => $request->prefer,
                'publication_date' => $request->publication_date,
                'author_name' => $request->author_name,
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
        $categories = Category::orderBy('name')->get();
        $books = Book::findOrFail($id);
        return view('backend.dashboard.books.edit', compact('categories', 'books'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $books = Book::findOrFail($id);
        $request->validate([
            'name' => 'required',
            'content' => 'required',
            'category_id' => 'required',
            'prefer' => 'required',
            'publication_date' => 'required',
            'author_name' => 'required',
            'display_order' => $books->display_order == $request->display_order ? 'required|numeric': 'required|unique:books|numeric',
            'video' => 'mimes:mp4,mov,ogg,qt,flv,avi,wmv,mkv,flv',
            'photo' => 'image'
        ],[
            'category_id.required' => 'The category name is required.',
            'display_order.unique' => 'There are other articles with the same order.'
        ]);
        try {
            $books->name = $request->name;
            $books->content = $request->content;
            $books->category_id = $request->category_id;
            $books->prefer = $request->prefer;
            $books->publication_date = $request->publication_date;
            $books->author_name = $request->author_name;
            $books->display_order = $request->display_order;
            if($request->has('photo')){
                if($books->photo){
                    $oldImg = $books->photo;
                    $books->photo = $this->deleteImg('upload_imgs', $oldImg);
                }
                $books->photo = $this->uploadImg($request, 'photo', 'BookImgs', 'books', 'upload_imgs');
            }
            if($request->has('video')){
                if($books->video){
                    $oldVid = $books->video;
                    $books->video = $this->deleteVids('upload_imgs', $oldVid);
                }
                $books->video = $this->uploadVids($request, 'video', 'BookImgs', 'books', 'upload_imgs');
            }
            $books->save();
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
            $books = Book::findOrFail($id);
            if($books->photo && $books->video){
                $oldImg = $books->photo;
                $oldVid = $books->video;
                $this->deleteImg('upload_imgs', $oldImg);
                $this->deletevids('upload_imgs', $oldVid);
            }
            $books->delete();
            return redirect()->route('books.index')->with(['message' => 'Entery Deleted Successfully']);
        }catch(Exception $e){
            Log::info($e->getMessage());
            return redirect()->route('books.index')->with(['message' => $e->getMessage() ]);
        }
    }
}
