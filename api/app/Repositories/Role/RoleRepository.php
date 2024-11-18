<?php
declare(strict_types=1);

namespace Repository\Role;
use App\Models\Role;
use Repository\BaseRepository;

class RoleRepository extends BaseRepository 
{
    const API_ENDPOINT_RESOURCE_NAME = 'roles';
    public function model()
    {
        return Role::class;
    }

    protected function applyDefaultCriteria($query)
    {
        parent::applyDefaultCriteria($query);
        $query->orderBy('created_at', 'desc');
    }

    protected function getSearchFields()
    {
        return ['name'];
    }
}
