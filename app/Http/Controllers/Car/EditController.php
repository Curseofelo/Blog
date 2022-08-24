<?php

namespace App\Http\Controllers\Car;

use App\Models\Car;
use App\Models\CarCategory;
use App\Models\TagCar;

class EditController extends BaseController
{
    public function __invoke(Car $car)
    {
        $categories = CarCategory::all();
        $tags = TagCar::all();
        return view('car.edit', compact('categories', 'tags' , 'car'));
    }
}
