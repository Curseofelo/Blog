<?php

namespace App\Http\Controllers\Car;

use App\Models\Car;

class DestroyController extends BaseController
{
    public function __invoke(Car $car)
    {
        $car->delete();
        return redirect()->route('car.index');
    }
}
