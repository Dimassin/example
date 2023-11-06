<?php

namespace App\Http\Controllers\Car;

use App\Http\Requests\Car\StoreRequest;
use App\Models\Car;

class StoreController extends BaseController
{
    public function __invoke(StoreRequest $request) {
        $data = $request->validated();

        $this->service->store($data);

        return redirect()->route('car.create');
    }
}
