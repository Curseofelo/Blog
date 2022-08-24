<?php

namespace App\Http\Controllers\Game;

use App\Http\Controllers\Controller;
use App\Http\Requests\Game\StoreRequest;
use App\Models\Game;

class StoreController extends BaseController
{
    public function __invoke (StoreRequest $request)
    {
        $data = $request->validated();
        $this->service->store($data);
        return redirect()->route('game.index');
    }

}
