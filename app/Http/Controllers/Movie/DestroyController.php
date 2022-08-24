<?php

namespace App\Http\Controllers\Movie;

use App\Models\Movie;

class DestroyController extends BaseController
{
    public function __invoke(Movie $movie)
    {
        $movie->delete();
        return redirect('movie.index');
    }
}
