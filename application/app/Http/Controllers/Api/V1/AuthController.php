<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Http\Requests\Api\V1\AuthRequest;
use App\Services\AuthService;

class AuthController extends Controller
{
    public function __construct(protected AuthService $authService)
    {
    }

    public function login(AuthRequest $request): mixed
    {
        return response()->json($this->authService->authenticate(
            $request->validated()
        ));
    }

    public function me(): mixed
    {
        return response()->json(auth()->user());
    }
}