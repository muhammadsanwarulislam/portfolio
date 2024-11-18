<?php

declare(strict_types=1);

namespace App\Http\Controllers\Core\Auth;

use App\Traits\JsonResponseTrait;
use Illuminate\Http\JsonResponse;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Http\Resources\User\UserResource;
use App\Events\LoggedInUserAccessTokenStoreEvent;
use Repository\{
    Role\RoleRepository,
    User\UserRepository
};
use App\Http\Requests\Auth\{
    LoginPostRequest,
    RegistrationPostRequest
};
use App\Services\Auth\AuthService;

class AuthController extends Controller
{
    use JsonResponseTrait;

    function __construct(
        protected UserRepository $userRepository,
        protected RoleRepository $roleRepository,
        protected AuthService $authService
    ) {}

    public function register(RegistrationPostRequest $request): JsonResponse
    {
        try {
            $user = $this->authService->userRegistration($request->validated());

            return $this->createdJsonResponse('User registered successfully', [
                'user' => new UserResource($user),
            ]);
        } catch (\Exception $e) {

            return $this->errorJsonResponse($e->getMessage());
        }
    }

    public function authorizedUserInformation(): JsonResponse
    {
        try {
            $user = $this->authService->userInformation();

            return $this->successJsonResponse('Logged in user information', [
                'access_token'  => $user['remember_token'],
                'user'          => new UserResource($user)
            ]);
        } catch (\Exception $e) {

            return $this->unAuthenticatedJsonResponse($e->getMessage());
        }
    }

    public function login(LoginPostRequest $request): JsonResponse
    {
        try {
            $credentials = $request->only(['email', 'password']);

            if (!auth()->guard('web')->attempt($credentials)) {
                return $this->errorJsonResponse('Invalid Credentials');
            }

            $user = [
                'access_token'  => $this->userRepository->generateAccessToken(Auth::guard('web')->user()),
                'user'          =>  Auth::user(),
            ];

            event(new LoggedInUserAccessTokenStoreEvent($user));

            return $this->successJsonResponse('Login successfully', [
                'access_token'  => $user['access_token'],
                'access_type'   => 'Bearer',
                'user'          => new UserResource($user['user'])
            ]);
        } catch (\Exception $e) {
            return $this->errorJsonResponse($e->getMessage());
        }
    }

    public function logout(): JsonResponse
    {
        Auth::logout();
        return $this->successJsonResponse('User logged out');
    }
}
