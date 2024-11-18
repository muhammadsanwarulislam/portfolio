<?php
declare(strict_types=1);

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Repository\Role\RoleRepository;
use Repository\Permission\PermissionRepository;

class RolePermissionSeeder extends Seeder
{
    function __construct(protected RoleRepository $roleRepository, protected PermissionRepository $permissionRepository)
    {
    }

    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $permissions = $this->permissionRepository->getAllPermissionsForAdminSeeder();
        $admin = $this->roleRepository->model()::where('name', '=', 'Admin')->first();
        foreach ($permissions as $permission) {
            DB::table('role_permission')->insert([
                'role_id'       => $admin->id,
                'permission_id' => $permission->id,
                'created_at'    => new \DateTime(),
            ]);
        }
    }
}
