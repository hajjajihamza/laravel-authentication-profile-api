<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use App\Http\Requests\StoreUserRequest;
use App\Models\User;
use Illuminate\Http\JsonResponse;

class AuthController extends Controller
{
    public function register(StoreUserRequest $request): JsonResponse
    {
        $user = User::create($request->validated());

        return response()->json([
            'user' => $user->toResource(),
            'message' => 'Account created successfully',
        ], 201);
    }

    public function login(LoginRequest $request): JsonResponse
    {
        $credentials = $request->validated();

        if (!$token = auth()->attempt($credentials)) {
            return response()->json(['message' => 'Invalid credentials'], 401);
        }

        return $this->respondWithToken($token, 'Login successful');
    }

    public function logout(): JsonResponse
    {
        auth()->logout();

        return response()->json([
            'message' => 'Logout successful',
        ]);
    }

    /**
     * Refresh a token.
     */
    public function refresh(): JsonResponse
    {
        return $this->respondWithToken(auth()->refresh(), 'Token refreshed');
    }

    /**
     * Get the token array structure.
     *
     * @param string $token
     * @param string $message
     * @return JsonResponse
     */
    protected function respondWithToken(string $token, string $message): JsonResponse
    {
        return response()->json([
            'message' => $message,
            'token' => $token,
        ]);
    }
}
