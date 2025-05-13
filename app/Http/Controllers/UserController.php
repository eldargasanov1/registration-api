<?php

namespace App\Http\Controllers;

use App\Http\Requests\RegistrationRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;
use Throwable;

class UserController extends Controller
{
    /**
     * Register new user
     * @throws Throwable
     */
    public function registration(RegistrationRequest $request): JsonResource
    {
        $userInfoFromRequest = $request->safe()->toArray();
        $user = User::query()->create($userInfoFromRequest);
        $userToken = $user->createToken('token')->plainTextToken;
        $user->update(['auth-token' => $userToken]);
        return $user->toResource();
    }

    /**
     * Get user's profile
     * @throws Throwable
     */
    public function profile(Request $request): JsonResource
    {
        return $request->user()->toResource();
    }
}
