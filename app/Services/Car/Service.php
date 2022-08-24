<?php

namespace App\Services\Car;

use App\Models\Car;

class Service
{
    public function store ($data)
    {
        $tags = $data['tags'];
        unset($data['tags']);
        $car = Car::create($data);
        $car->tags()->attach($tags);
    }

    public function update ($car, $data)
    {
        $tags = $data['tags'];
        unset($data['tags']);
        $car->update($data);
        $car->tags()->sync($tags);
    }

}
