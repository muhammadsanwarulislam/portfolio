<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Core\{
    Auth\AuthController, 
    Permission\PermissionController, 
    Role\RoleController, 
    User\UserController,
    Module\ModuleController
};
use Repository\{
    User\UserRepository,
    Permission\PermissionRepository,
    Role\RoleRepository,
    Module\ModuleRepository
};

Route::get('/translations/{locale}', function ($locale) {
    $path = resource_path("lang/{$locale}.json");
    if (file_exists($path)) {
        return response()->json(json_decode(file_get_contents($path), true));
    }
    return response()->json(['error' => 'Translation file not found.'], 404);
});

// User or issuer or requester authentication and Registration
Route::post(UserRepository::REGISTER_API_ENDPOINT_NAME, [AuthController::class, 'register']);
Route::post(UserRepository::LOGIN_API_ENDPOINT_NAME, [AuthController::class, 'login'])->name('login');

Route::group(['middleware' => ['auth:sanctum']], function () {
    Route::get(UserRepository::CURRENT_USER_API_ENDPOINT_NAME, [AuthController::class, 'authorizedUserInformation']);
    Route::apiResource(UserRepository::API_ENDPOINT_RESOURCE_NAME, UserController::class);
    Route::apiResource(PermissionRepository::API_ENDPOINT_RESOURCE_NAME, PermissionController::class);
    Route::apiResource(RoleRepository::API_ENDPOINT_RESOURCE_NAME, RoleController::class);
    Route::apiResource(ModuleRepository::API_ENDPOINT_RESOURCE_NAME, ModuleController::class);
});
