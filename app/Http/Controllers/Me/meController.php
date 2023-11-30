<?php

namespace App\Http\Controllers\Me;

use App\Http\Controllers\Controller;
use App\Http\Resources\User\UserResource;
use Illuminate\Http\Request;

class meController extends Controller
{
    public function show()
    {
        $user = auth()->user();
        return new UserResource($user);
    }
}
