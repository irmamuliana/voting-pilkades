<?php

namespace App\Repositories\Eloquent;

use App\Models\Pemilih;
use App\Repositories\Contracts\PemilihRepository;

use Kurt\Repoist\Repositories\Eloquent\AbstractRepository;

class EloquentPemilihRepository extends AbstractRepository implements PemilihRepository
{
    public function entity()
    {
        return Pemilih::class;
    }
}
