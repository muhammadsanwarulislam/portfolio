<?php 
declare(strict_types=1);

namespace App\Services\Auth;

use App\Services\User\UserService;
use Illuminate\Support\Facades\Auth;
use Repository\{
    Role\RoleRepository,
    User\UserRepository
};

class AuthService {
    public function __construct(
        protected UserRepository $userRepository,
        protected RoleRepository $roleRepository,
        protected UserService $userService
    )
    {

    }

    public function userRegistration($validateData)
    {
        try {
            $roleId = $this->roleRepository->getIdByName($validateData['role_name'] ?? env('DEFAULT_ROLE'));
            $user = $this->userRepository->create($validateData + [
                'role_id' => $roleId
            ]);
            return $user;
        } catch (\Exception $e) {
            throw $e;
        }
    }

    public function userInformation()
    {
        try {
            $user = Auth::user();
            return $user;
        } catch (\Exception $e) {
            throw $e;
        }
    }
}