<?php

namespace App\Http\Controllers\Admin;

use App\Exceptions\Admin\PlateHasBeenTakenException;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\TruckRequest;
use App\Models\Admin\Truck;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TruckController extends Controller
{
    public function index()
    {
        $trucks = Truck::orderBy('plate', 'asc')
                        ->get();
        return $trucks;
    }

    public function store(TruckRequest $request)
    {
        $input = $request->validated();

        if(Truck::query()->wherePlate($input['plate'])->exists()) {
            throw new PlateHasBeenTakenException();
        }

        $input['tenant_id'] = Auth::user()->tenant_id;
        $truck = Truck::query()->create($input);
        
        return $truck;
        //return new UserResource($user);
    }
}
