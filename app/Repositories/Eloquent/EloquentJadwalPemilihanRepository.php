<?php

namespace App\Repositories\Eloquent;

use App\Models\JadwalPemilihan;
use App\Repositories\Contracts\JadwalPemilihanRepository;

use Kurt\Repoist\Repositories\Eloquent\AbstractRepository;

class EloquentJadwalPemilihanRepository extends AbstractRepository implements JadwalPemilihanRepository
{
    public function entity()
    {
        return JadwalPemilihan::class;
    }
}
