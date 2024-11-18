<?php
declare(strict_types=1);

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Repository\Permission\PermissionRepository;
use Carbon\Carbon;
use Repository\Module\ModuleRepository;

class PermissionSeeder extends Seeder
{
    public function __construct(protected PermissionRepository $permissionRepository, protected ModuleRepository $moduleRepository)
    {
    }

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $permissions = [
            [
                'module' => 'User',
                'name' => 'add_users'
            ],
            [
                'module' => 'User',
                'name' => 'view_users'
            ],
            [
                'module' => 'User',
                'name' => 'edit_users'
            ],
            [
                'module' => 'User',
                'name' => 'delete_users'
            ],
            [
                'module' => 'Role',
                'name' => 'add_roles'
            ],
            [
                'module' => 'Role',
                'name' => 'view_roles'
            ],
            [
                'module' => 'Role',
                'name' => 'edit_roles'
            ],
            [
                'module' => 'Role',
                'name' => 'delete_roles'
            ],
            [
                'module' => 'Permission',
                'name' => 'add_permissions'
            ],
            [
                'module' => 'Permission',
                'name' => 'view_permissions'
            ],
            [
                'module' => 'Permission',
                'name' => 'edit_permissions'
            ],
            [
                'module' => 'Permission',
                'name' => 'delete_permissions'
            ],
            [
                'module' => 'Module',
                'name' => 'add_modules'
            ],
            [
                'module' => 'Module',
                'name' => 'view_modules'
            ],
            [
                'module' => 'Module',
                'name' => 'edit_modules'
            ],
            [
                'module' => 'Module',
                'name' => 'delete_modules'
            ]
        ];

        // Create or update permissions
        foreach ($permissions as $permission) {
            $moduleId = $this->moduleRepository->getModuleId($permission['module']);
            if ($moduleId) {
                $this->permissionRepository->model()::updateOrCreate(
                    ['module_id' => $moduleId, 'name' => $permission['name']],
                    ['created_at' => Carbon::now(), 'updated_at' => Carbon::now()]
                );
            }
        }
    }
}
