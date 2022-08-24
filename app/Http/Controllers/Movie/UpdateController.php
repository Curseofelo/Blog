<?php

namespace App\Http\Controllers\Movie;

use App\Http\Requests\Movie\UpdateRequest;
use App\Models\Movie;

class UpdateController extends BaseController
{
    public function __invoke(UpdateRequest $request, Movie $movie)
    {
        $data = $request->validated();
        $this->service->update($movie, $data);
        return redirect()->route('movie.show', $movie->id);
    }
}
