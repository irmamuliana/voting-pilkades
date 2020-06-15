<?php

namespace App\Repositories\Eloquent;

use App\Models\Paslon;
use App\Repositories\Contracts\PaslonRepository;

use Kurt\Repoist\Repositories\Eloquent\AbstractRepository;

class EloquentPaslonRepository extends AbstractRepository implements PaslonRepository
{
    public function entity()
    {
        return Paslon::class;
    }
}
