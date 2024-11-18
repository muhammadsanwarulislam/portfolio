<?php
declare(strict_types= 1);

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Repository\Role\RoleRepository;

class RoleSeeder extends Seeder
{
    function __construct(protected RoleRepository $roleRepository)
    {
    }
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $roles = [
            ["name" => "Admin"],
            ["name" => "Developer"],
            ["name" => "Support"],
            ["name" => "Client"],
        ];
        //create define roles
        foreach($roles as $role) {
            $this->roleRepository->model()::updateOrCreate([
                'name'          => $role['name'],
                'status'        => 1,
                'created_at'    => new \DateTime(),
            ]);
        }
    }
}