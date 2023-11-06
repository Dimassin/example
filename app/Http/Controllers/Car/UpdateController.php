<?php

namespace App\Http\Controllers\Car;

use App\Http\Controllers\Controller;
use App\Http\Requests\Car\UpdateRequest;
use App\Models\Car;

class UpdateController extends BaseController
{
    public function __invoke(UpdateRequest $request, Car $car) {
        $data = $request->validated();

        $this->service->update($car, $data);

        return redirect()->route('car.show', $car->id);
    }
}
