<?php

namespace App\Http\Controllers\Car;

use App\Http\Filters\CarFilter;
use App\Http\Requests\Car\FilterRequest;
use App\Models\Car;

class IndexController extends BaseController
{
    public function __invoke(FilterRequest $request)
    {
        $data = $request->validated();

        $filter = app()->make(CarFilter::class, ['queryParams' => array_filter($data)]);
        $cars = Car::filter($filter)->paginate(10);
        return view('car.index', compact('cars'));
    }
}
