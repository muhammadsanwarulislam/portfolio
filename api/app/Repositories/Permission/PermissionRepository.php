<?php
declare(strict_types=1);

namespace Repository\Permission;
use App\Models\Permission;
use Illuminate\Database\Eloquent\Model;
use Repository\BaseRepository;

class PermissionRepository extends BaseRepository 
{
    const API_ENDPOINT_RESOURCE_NAME = 'permissions';

    public function model()
    {
        return Permission::class;
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

    public function getAllPermissionsForAdminSeeder()
    {
        return $this->model()::all();
    }
}
