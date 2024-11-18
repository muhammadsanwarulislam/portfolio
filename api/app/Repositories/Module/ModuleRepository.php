<?php
declare(strict_types=1);

namespace Repository\Module;

use App\Models\Module;
use Repository\BaseRepository;

class ModuleRepository extends BaseRepository 
{
    const API_ENDPOINT_RESOURCE_NAME = 'modules';
    public function model()
    {
        return Module::class;
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

    public function getModuleId(string $name)
    {
        return $this->model()::where('name', $name)->value('id');
    }
}
