<?php

namespace App\Repositories\Eloquent;

use App\Models\Pemilu;
use App\Repositories\Contracts\PemiluRepository;

use Kurt\Repoist\Repositories\Eloquent\AbstractRepository;

class EloquentPemiluRepository extends AbstractRepository implements PemiluRepository
{
    public function entity()
    {
        return Pemilu::class;
    }
}
