<?php

namespace App\Http\Controllers\Game;

use App\Http\Controllers\Controller;
use App\Http\Requests\Game\UpdateRequest;
use App\Models\Game;

class UpdateController extends BaseController
{
    public function __invoke (UpdateRequest $request,Game $game)
    {
        $data = $request->validated();
        $this->service->update($game, $data);
        return redirect()->route('game.show', $game->id);
    }

}
