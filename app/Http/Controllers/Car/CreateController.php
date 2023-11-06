<?php

namespace App\Http\Controllers\Car;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Wheel;

class CreateController extends BaseController
{
    public function __invoke() {
        $categories = Category::all();
        $wheels = Wheel::all();

        return view('car.create', compact('categories', 'wheels'));
    }
}
