<?php
declare(strict_types=1);

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Repository\Role\RoleRepository;
use Repository\User\UserRepository;

class UserSeeder extends Seeder
{
    function __construct(
        protected UserRepository $userRepository, 
        protected RoleRepository $roleRepository
    ) {}

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Define user data array
        $usersData = [
            [
                'email'     => 'super@gmail.com',
                'username'  => 'Muhammad',
                'password'  => 'password',
                'role_id'   => 1,
                'phone'     => '01774418388'
            ]
        ];

        // Create users and profiles
        foreach ($usersData as $userData) {
            $this->userRepository->model()::updateOrCreate(
                ['email' => $userData['email']],
                [
                    'username'  => $userData['username'],
                    'password'  => $userData['password'],
                    'role_id'   => $userData['role_id'],
                    'phone'     => $userData['phone'],
                    'created_at' => now(),
                ]
            );
        }
    }
}
