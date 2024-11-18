<?php 
declare(strict_types=1);

namespace Repository\Configuration;

use App\Models\Configuration;
use Repository\BaseRepository;

class ConfigurationRepository extends BaseRepository
{
    public function model()
    {
        return Configuration::class;
    }
}