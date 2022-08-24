<?php

namespace App\Services\Book;

use App\Models\Book;
use PhpParser\Node\Expr\FuncCall;

class Service
{
    public function store ($data)
    {
        $book = Book::create($data);
    }

    public  function update ($book, $data)
    {
        $book->update($data);
    }
}
