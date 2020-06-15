<?php

namespace App\Repositories\Eloquent;

use App\Models\Hasil;
use App\Repositories\Contracts\HasilRepository;

use Kurt\Repoist\Repositories\Eloquent\AbstractRepository;

class EloquentHasilRepository extends AbstractRepository implements HasilRepository
{
    public function entity()
    {
        return Hasil::class;
    }
}
