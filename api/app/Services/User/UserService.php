<?php
declare(strict_types=1);

namespace App\Services\User;

use App\Models\User;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\DB;
use Repository\Role\RoleRepository;
use Repository\User\UserRepository;

class UserService
{
    public function __construct(
        protected RoleRepository $roleRepository,
        protected UserRepository $userRepository
    ) {
    
    }

    public function getUsers($requestData)
    {
        try {
            $offset         = $requestData['offset'];
            $limit          = $requestData['limit'];
            $option         = $requestData['option'];
            $searchData     = $requestData['searchData'];

            $users = $this->userRepository->getAll($offset, $limit, $searchData, $option);
            $totalCount = $users['count'];

            return [
                'option'    =>  $option, 
                'offset'    =>  $offset, 
                'limit'     =>  $limit, 
                'totalCount'=>  $totalCount, 
                'users'     =>  $users,
                'metaData'  =>  $users['metadata']
            ];

        } catch (\Exception $e) {

            throw $e;
        }
    }

    public function createUser(array $data)
    {
        try {
            $password = $this->userRepository->generateDefaultPassword(env('DEFAULT_PASSWORD_FOR_ALL_USERS', 'password123'));
            $user = $this->userRepository->create($data + ['password' => $password]);
            return $user;
        } catch (\Exception $e) {
            throw $e;
        }
    }

    public function updateUser(array $data, string $id, bool $isPatch = false)
    {
        try {
            $user = $this->userRepository->updateByID($id, $data);
            return $user;
        } catch (\Exception $e) {
            throw $e;
        }
    }

    public function getUserById($userId)
    {
        try {
            $user = $this->userRepository->findByID($userId);
            return $user;
        } catch (\Exception $e) {
            throw $e;
        }
    }

    public function deleteUserById($userId)
    {
        try {
            $this->userRepository->deletedByID($userId);
        } catch (\Exception $e) {
            throw $e;
        }
    }
}
