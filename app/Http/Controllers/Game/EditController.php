<?php

namespace App\Http\Controllers\Game;

use App\Http\Controllers\Controller;
use App\Models\Game;
use App\Models\GameCategory;
use App\Models\TagGame;

class EditController extends BaseController
{
    public function __invoke (Game $game)
    {
        $categories = GameCategory::all();
        $tags = TagGame::all();
        return view('game.edit', compact('game','categories','tags'));
    }

}
