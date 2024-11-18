<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Repository\Module\ModuleRepository;

class ModuleSeeder extends Seeder
{
    function __construct(protected ModuleRepository $moduleRepository)
    {
    }
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $modules = [
            ["name" => "User"],
            ["name" => "Role"],
            ["name" => "Permission"],
            ["name" => "Module"],
        ];

        foreach($modules as $module) {
            $this->moduleRepository->model()::updateOrCreate([
                'name'          => $module['name'],
                'created_at'    => new \DateTime(),
            ]);
        }
    }
}
