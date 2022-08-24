<?php

namespace App\Http\Controllers\Book;

use App\Models\Book;

class DestroyController extends BaseController
{
    public function __invoke(Book $book)
    {
        $book->delete();
        return redirect()->route('book.index');
    }
}
