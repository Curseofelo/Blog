<?php

namespace App\Http\Controllers\Movie;

use App\Models\Movie;

class CreateController extends BaseController
{
    public function __invoke()
    {
        return view('movie.create');
    }
}
