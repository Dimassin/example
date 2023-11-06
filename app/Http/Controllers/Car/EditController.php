<?php

namespace App\Http\Controllers\Car;

use App\Http\Controllers\Controller;
use App\Models\Car;
use App\Models\Category;
use App\Models\Wheel;

class EditController extends BaseController
{
    public function __invoke(Car $car) {
        $categories = Category::all();
        $wheels = Wheel::all();

        return view('car.edit', compact('car', 'categories', 'wheels'));
    }
}
