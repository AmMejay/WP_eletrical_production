<?php

use App\Http\Controllers\AuthController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::post('/login', [AuthController::class, 'login']);

// Protected routes
Route::middleware('auth:sanctum')->group(function () {
    Route::post('/logout', [AuthController::class, 'logout']);
    Route::get('/user', fn (Request $request) => $request->user());

    Route::post('/tokens', function (Request $request) {
        $request->validate([
            'name' => 'required|string|max:255',
        ]);

        $token = $request->user()->createToken(
            $request->name,
            $request->input('abilities', ['*'])
        );

        return response()->json(['token' => $token->plainTextToken]);
    });

    Route::get('/tokens', fn (Request $request) => $request->user()->tokens);
    Route::delete('/tokens/{token_id}', function (Request $request, $token_id) {
        $request->user()->tokens()->where('id', $token_id)->delete();

        return response()->json(['message' => 'Token deleted.']);
    });
});
