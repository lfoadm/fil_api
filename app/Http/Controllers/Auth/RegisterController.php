<?php

namespace App\Http\Controllers\Auth;

use App\Events\UserRegistered;
use App\Exceptions\Auth\UserHasBeenTakenException;
use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\RegisterRequest;
use App\Http\Resources\User\UserResource;
use App\Models\User;
use Illuminate\Support\Str;

class RegisterController extends Controller
{
    public function __invoke(RegisterRequest $request)
    {
        $input = $request->validated();
        
        if(User::query()->whereEmail($input['email'])->exists()) {
            throw new UserHasBeenTakenException();
        }
        //MODEL JÁ VEM HASHED NA VERSÃO NOVA DO LARAVEL
            // $input['password'] = bcrypt($input['password']); 

        $input['token'] = Str::uuid();
        $user = User::query()->create($input);
        UserRegistered::dispatch($user);

        return new UserResource($user);
    }
}
