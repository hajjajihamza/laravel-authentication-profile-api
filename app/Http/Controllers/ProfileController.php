<?php

namespace App\Http\Controllers;

use App\Http\Requests\UpdatePasswordRequest;
use App\Http\Requests\UpdateUserRequest;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Hash;

class ProfileController extends Controller
{
    public function index(): JsonResponse
    {
        return response()->json([
            'user' => auth()->user()->toResource(),
            'message' => 'Profile retrieved successfully',
        ]);
    }

    public function update(UpdateUserRequest $request): JsonResponse
    {
        auth()->user()->update($request->validated());

        return response()->json([
            'user' => auth()->user()->toResource(),
            'message' => 'Profile updated successfully',
        ], 201);
    }

    public function updatePassword(UpdatePasswordRequest $request): JsonResponse
    {
        auth()->user()->update([
            'password' => Hash::make($request->password),
        ]);
        return response()->json([
            'message' => 'Password updated successfully',
        ], 201);
    }

    public function destroy(): JsonResponse
    {
        auth()->user()->delete();
        return response()->json([
            'message' => 'Profile deleted successfully',
        ], 201);
    }
}
