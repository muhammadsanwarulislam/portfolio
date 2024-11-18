<?php
declare(strict_types=1);

namespace Repository\User;

use App\Models\User;
use Repository\BaseRepository;
use Illuminate\Support\Facades\Auth;

class UserRepository extends BaseRepository
{
    const API_ENDPOINT_RESOURCE_NAME = 'users';
    const REGISTER_API_ENDPOINT_NAME = 'register';
    const LOGIN_API_ENDPOINT_NAME = 'login';
    const CURRENT_USER_API_ENDPOINT_NAME = 'current-user';

    public function model()
    {
        return User::class;
    }

    protected function applyDefaultCriteria($query)
    {
        parent::applyDefaultCriteria($query);
        $query->where('id', '<>', Auth::id());
    }

    protected function getSearchFields()
    {
        return ['username', 'email'];
    }

    public function generateAccessToken(User $user): string
    {
        return $user->createToken('authToken')->plainTextToken;
    }

    public function generateDefaultPassword($defaultPasswordSetFromEnv = null): string
    {
        return $defaultPasswordSetFromEnv;
    }

    public function checktheIncommingRoleIdHaveAnyUser($roleId): bool
    {
        return $this->model()::where('role_id', $roleId)->exists();
    }
}
