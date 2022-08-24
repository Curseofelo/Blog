<?php

namespace App\Http\Controllers\Game;

use App\Http\Controllers\Controller;
use App\Models\Game;

class DestroyController extends BaseController
{
    public function __invoke (Game $game)
    {
        $game->delete();
        return redirect()->route('game.index');
    }

}
