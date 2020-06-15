<?php

namespace App\Repositories\Eloquent;

use App\Models\Tps;
use App\Repositories\Contracts\TpsRepository;

use Kurt\Repoist\Repositories\Eloquent\AbstractRepository;

class EloquentTpsRepository extends AbstractRepository implements TpsRepository
{
    public function entity()
    {
        return Tps::class;
    }
}
