<?php

namespace App\Http\Controllers\Movie;

use App\Http\Requests\Movie\StoreRequest;
use App\Models\Movie;

class StoreController extends BaseController
{
    public function __invoke(StoreRequest $request)
    {
        $data = $request->validated();
        $this->service->store($data);
        return redirect()->route('movie.index');
    }
}
