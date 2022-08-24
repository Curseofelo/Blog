<?php

namespace App\Http\Controllers\Book;

use App\Models\Book;

class IndexController extends BaseController
{
    public function __invoke()
    {
        $books = Book::all();
        return view('book.index', compact('books'));
    }
}
