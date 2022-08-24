<?php

namespace App\Http\Controllers\Game;

use App\Http\Controllers\Controller;
use App\Http\Filters\GameFilter;
use App\Http\Requests\Game\FilterRequest;
use App\Models\Game;

class IndexController extends BaseController
{
    public function __invoke (FilterRequest $request)
    {
        $data = $request->validated();
        $filter = app()->make(GameFilter::class, ['queryParams' => array_filter($data)]);

        $games = Game::filter($filter)->paginate(10);
        return view('game.index',compact('games'));
    }

}
