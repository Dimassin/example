<?php

namespace App\Http\Services\Car;

use App\Models\Car;

class Service
{
    public function store($data)
    {
        $wheels = $data['wheels'];
        unset($data['wheels']);

        $car = Car::create($data);

        $car->wheels()->attach($wheels);
    }

    public function update($car, $data)
    {
        $wheels = $data['wheels'];
        unset($data['wheels']);

        $car->update($data);
        $car->wheels()->sync($wheels);
    }
}
