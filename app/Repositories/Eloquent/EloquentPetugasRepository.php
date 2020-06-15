<?php

namespace App\Repositories\Eloquent;

use App\Models\Petugas;
use App\Repositories\Contracts\PetugasRepository;

use Kurt\Repoist\Repositories\Eloquent\AbstractRepository;

class EloquentPetugasRepository extends AbstractRepository implements PetugasRepository
{
    public function entity()
    {
        return Petugas::class;
    }
}
