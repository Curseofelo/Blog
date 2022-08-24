<?php

namespace App\Http\Controllers\Car;

use App\Models\CarCategory;
use App\Models\TagCar;

class CreateController extends BaseController
{
    public function __invoke()
    {
        $categories = CarCategory::all();
        $tags = TagCar::all();
        return view('car.create', compact('categories','tags'));
    }
}
