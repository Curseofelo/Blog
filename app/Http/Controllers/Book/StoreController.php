<?php

namespace App\Http\Controllers\Book;



use App\Http\Requests\Book\StoreRequest;

class StoreController extends BaseController
{
    public function __invoke(StoreRequest $request)
    {
        $data = $request->validated();
        $this->sevice->store($data);
        return redirect()->route('book.index');
    }
}
