<?php

namespace App\Http\Controllers\Book;

class CreateController extends BaseController
{
    public function __invoke()
    {
        return view('book.create');
    }
}
