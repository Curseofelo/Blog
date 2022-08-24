<?php

namespace App\Http\Controllers\Game;

use App\Http\Controllers\Controller;
use App\Models\Game;
use App\Models\GameCategory;
use App\Models\TagGame;

class CreateController extends BaseController
{
    public function __invoke ()
    {
        $categories = GameCategory::all();
        $tags = TagGame::all();
        return view('game.create', compact('categories','tags'));
    }

}
