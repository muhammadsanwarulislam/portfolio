<?php 
declare(strict_types=1);

namespace App\Services\Role;

use Illuminate\Support\Arr;
use App\Traits\JsonResponseTrait;
use Illuminate\Support\Facades\DB;
use Repository\Role\RoleRepository;
use Repository\User\UserRepository;

class RoleService {
    use JsonResponseTrait;
    public function __construct(protected RoleRepository $roleRepository, protected UserRepository $userRepository,)
    {
    }

    public function getRoles($requestData)
    {
        try {
            $offset         = $requestData['offset'];
            $limit          = $requestData['limit'];
            $option         = $requestData['option'];
            $searchData     = $requestData['searchData'];

            $roles = $this->roleRepository->getAll($offset, $limit, $searchData, $option);
            $totalCount = $roles['count'];

            return [
                'option'    =>  $option, 
                'offset'    =>  $offset, 
                'limit'     =>  $limit, 
                'totalCount'=>  $totalCount, 
                'roles'     =>  $roles,
                'metaData'  =>  $roles['metadata']
            ];

        } catch (\Exception $e) {

            throw $e;
        }
    }

    public function createRole(array $data)
    {
        DB::beginTransaction();
        try {
            $role = $this->roleRepository->create($data);

            if (!empty($data['permissions'])) {
                $this->assignPermissions($role->id, $data['permissions']);
            }

            DB::commit();
            return $role;
        } catch (\Exception $e) {
            DB::rollBack();
            throw $e;
        }
    }

    public function updateRole(array $data, $id)
    {
        DB::beginTransaction();
        try {
            // Check if the role exists
            $role = $this->roleRepository->findByID($id);
            if (!$role) {
                throw new \Exception('Role not found');
            }

            // Update role name if provided
            if (isset($data['name'])) {
                $role = $this->roleRepository->updateByID($id, Arr::except($data, ['permissions']));
            }

            // Update role permissions if provided
            if (isset($data['permissions'])) {
                $permissions = $data['permissions'];

                // Delete existing permissions and insert new ones in a single operation
                DB::table('role_permission')->where('role_id', $id)->delete();

                $permissionData = array_map(function($permissionId) use ($id) {
                    return [
                        'role_id' => $id,
                        'permission_id' => $permissionId,
                    ];
                }, $permissions);

                DB::table('role_permission')->insert($permissionData);
            }

            DB::commit();
            return $role;
        } catch (\Exception $e) {
            DB::rollBack();
            throw $e;
        }
    }

    protected function assignPermissions($roleId, array $permissions)
    {
        foreach ($permissions as $permissionId) {
            DB::table('role_permission')->insert([
                'role_id' => $roleId,
                'permission_id' => $permissionId,
            ]);
        }
    }

    public function getRoleById($roleId)
    {
        try {
            $role = $this->roleRepository->findByID($roleId);

            return $role;

        } catch (\Exception $e) {

            throw $e;
        }
    }

    public function deleteRoleById($roleId)
    {
        try {
            if ($this->userRepository->checktheIncommingRoleIdHaveAnyUser($roleId)) {
                return $this->errorJsonResponse('Cannot delete role. Users are associated with this role.');
            }

            DB::table('role_permission')->where('role_id', $roleId)->delete();
            $this->roleRepository->deletedByID($roleId);

        } catch (\Exception $e) {
            
            throw $e;
        }
    }
}