<?php

namespace App\Services\Movie;

use App\Models\Movie;

class Service
{
    public function store($data)
    {
        $movie = Movie::create($data);
    }

    public function update($movie, $data)
    {
        $movie->update($data);
    }


}
