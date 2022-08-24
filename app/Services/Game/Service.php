<?php

namespace App\Services\Game;

use App\Models\Game;


class Service
{
    public function store ($data)
    {
        $tags = $data ['tags'];
        unset($data['tags']);
        $game = Game::create($data);
        $game->tags()->attach($tags);
    }

    public function update ($game, $data)
    {
        $tags = $data['tags'];
        unset ($data['tags']);
        $game->tags()->sync($tags);

    }


}
