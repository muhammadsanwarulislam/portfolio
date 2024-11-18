<?php
declare(strict_types=1);

namespace App\Http\Controllers\Core\User;

use Illuminate\Http\Request;
use App\Traits\JsonResponseTrait;
use Illuminate\Http\JsonResponse;
use App\Services\User\UserService;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Gate;
use App\Http\Resources\User\UserResource;
use App\Events\SentRegisteredUserEmailEvent;
use App\Http\Requests\User\UserCreateOrUpdateRequest;


class UserController extends Controller
{
    use JsonResponseTrait;

    public function __construct(protected UserService $userService)
    {
    }
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request): JsonResponse
    {
        try {
            Gate::authorize('view', 'users');

            $data = $this->userService->getUsers($request);

            return $this->successJsonResponseWithLimitOffset(
                'List of users',
                $data['option'],
                $data['offset'],
                $data['limit'],
                $data['totalCount'],
                $data['metaData'],
                UserResource::collection($data['users']['result'])
            );
            
        } catch (\Exception $e) {

            return $this->errorJsonResponse($e->getMessage());
        }
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(UserCreateOrUpdateRequest $request): JsonResponse
    {
        try {
            Gate::authorize('add', 'users');

            $user = $this->userService->createUser($request->all());

            return $this->createdJsonResponse('User created successfully', ['user' => new UserResource($user)]);

        } catch (\Exception $e) {

            return $this->errorJsonResponse($e->getMessage());
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id): JsonResponse
    {
        try {
            Gate::authorize('view', 'users');

            $user = $this->userService->getUserById($id);

            return $this->successJsonResponse("The user id is: $id", new UserResource($user));

        } catch (\Exception $e) {

            return $this->errorJsonResponse($e->getMessage());
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UserCreateOrUpdateRequest $request, string $id): JsonResponse
    {
        try {
            Gate::authorize('edit', 'users');

            $isPatch = $request->isMethod('patch');
            $user = $this->userService->updateUser($request->all(), $id, $isPatch);

            $successMessage = $isPatch ? 'User status updated successfully' : 'User updated successfully';

            return $this->createdJsonResponse($successMessage, ['user' => new UserResource($user)]);

        } catch (\Exception $e) {

            return $this->errorJsonResponse($e->getMessage());
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id): JsonResponse
    {
        try {
            Gate::authorize('delete', 'users');

            $this->userService->deleteUserById($id);

            return $this->successJsonResponse('User delete successfully');
            
        } catch (\Exception $e) {

            return $this->errorJsonResponse($e->getMessage());
        }
    }
}
