<?php
declare(strict_types=1);

namespace App\Http\Controllers\Core\Role;

use Illuminate\Http\Request;
use App\Traits\JsonResponseTrait;
use Illuminate\Http\JsonResponse;
use App\Services\Role\RoleService;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Gate;
use App\Http\Resources\Role\RoleResource;
use App\Http\Requests\Role\RoleCreateOrUpdateRequest;


class RoleController extends Controller
{
    use JsonResponseTrait;

    function __construct(protected RoleService $roleService) 
    {
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request): JsonResponse
    {
        try {
            Gate::authorize('view', 'roles');

            $data = $this->roleService->getRoles($request);

            return $this->successJsonResponseWithLimitOffset(
                'List of role',
                $data['option'],
                $data['offset'],
                $data['limit'],
                $data['totalCount'],
                $data['metaData'],
                RoleResource::collection($data['roles']['result'])
            );
        } catch (\Exception $e) {

            return $this->errorJsonResponse($e->getMessage());
        }
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(RoleCreateOrUpdateRequest $request): JsonResponse
    {
        try {
            Gate::authorize('add', 'roles');

            $role = $this->roleService->createRole($request->validated());

            return $this->createdJsonResponse('Role create successfully', [
                'role'          => new RoleResource($role),
            ]);

        } catch (\Exception $e) {

            return $this->errorJsonResponse($e->getMessage());
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id): JsonResponse
    {
        try {
            Gate::authorize('edit', 'roles');

            $role = $this->roleService->getRoleById($id);

            return $this->successJsonResponse("The role $id is", new RoleResource($role));

        } catch (\Exception $e) {
            return $this->errorJsonResponse($e->getMessage());
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id): JsonResponse
    {
        try {
            Gate::authorize('edit', 'roles');
            
            $role = $this->roleService->updateRole($request->all(), $id);

            return $this->createdJsonResponse('Role updated successfully', [
                'role' => $role ? new RoleResource($role) : null
            ]);
        } catch (\Exception $e) {

            return $this->errorJsonResponse($e->getMessage());
        }
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id): JsonResponse
    {
        try {
            Gate::authorize('delete', 'roles');

            $this->roleService->deleteRoleById($id);

            return $this->successJsonResponse('Role delete successfully');

        } catch (\Exception $e) {

            return $this->errorJsonResponse($e->getMessage());
        }
    }
}
