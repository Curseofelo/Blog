<?php

namespace App\Http\Controllers\Game;

use App\Http\Controllers\Controller;
use App\Models\Game;

class ShowController extends BaseController
{
    public function __invoke (Game $game)
    {
        return view('game.show',compact('game'));
    }

}
