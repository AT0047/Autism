<?php

namespace App\Http\Controllers\dashboard;

use App\Http\Controllers\Controller;
use App\Models\Book;
use App\Models\BookQuestion;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class BookQuestionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index($id)
    {
        $questions = Book::findOrFail($id)->questions()->orderBy('created_at', 'desc')->paginate(10);
        $book = Book::findOrFail($id); // Use en_name or ar_name based on the language preference
        return view('backend.dashboard.book_questions.index', compact('questions', 'id', 'book'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create($id)
    {
        $book = Book::findOrFail($id);
        return view('backend.dashboard.book_questions.create', compact('id', 'book'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, $id)
    {
        $request->validate([
            'ar_question' => 'required',
            'en_question' => 'required',
            'ar_answer' => 'required',
            'en_answer' => 'required',
        ]);
        try {
            BookQuestion::create([
                'ar_question' => $request->ar_question,
                'en_question' => $request->en_question,
                'ar_answer' => $request->ar_answer,
                'en_answer' => $request->en_answer,
                'book_id' => $id,
            ]);
            return redirect()->route('books.book-questions.index', $id)->with(['message' => 'Question Added Successfully']);
        } catch (Exception $e) {
            Log::info($e->getMessage());
            return redirect()->route('books.book-questions.index', $id)->with(['message' => $e->getMessage()]);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $bookQuestion = BookQuestion::findOrFail($id);
        return view('backend.dashboard.book_questions.edit', compact('id', 'bookQuestion'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'ar_question' => 'required',
            'en_question' => 'required',
            'ar_answer' => 'required',
            'en_answer' => 'required',
        ]);
        $bookQuestion = BookQuestion::findOrFail($id);
        try {
            $bookQuestion->update([
                'ar_question' => $request->ar_question,
                'en_question' => $request->en_question,
                'ar_answer' => $request->ar_answer,
                'en_answer' => $request->en_answer,
            ]);
            return redirect()->route('books.book-questions.index', $bookQuestion->book_id)->with(['message' => 'Question Updated Successfully']);
        } catch (Exception $e) {
            Log::info($e->getMessage());
            return redirect()->route('books.book-questions.index', $bookQuestion->book_id)->with(['message' => $e->getMessage()]);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        try {
            $bookQuestion = BookQuestion::findOrFail($id);
            $bookQuestion->delete();
            return redirect()->route('books.book-questions.index', $bookQuestion->book_id)->with(['message' => 'Question Deleted Successfully']);
        } catch (Exception $e) {
            Log::info($e->getMessage());
            return redirect()->route('books.book-questions.index', $bookQuestion->book_id)->with(['message' => $e->getMessage()]);
        }
    }
}
