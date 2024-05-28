<?php

namespace App\Jobs;

use App\Models\Book;
use App\Traits\upload_vidoes;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Http\Request;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;

class SaveVideoJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;
    use upload_vidoes;

    public $bookId;
    /**
     * Create a new job instance.
     */
    public function __construct($bookId)
    {
        $this->bookId = $bookId;
    }

    /**
     * Execute the job.
     */
    public function handle(Request $request): void
    {
        $book = Book::findOrFail($this->bookId);
            $book->video = $this->uploadVids($request, 'video', 'BookImgs', 'books', 'upload_imgs');
            dd($request);
            $book->save();
    }
}
