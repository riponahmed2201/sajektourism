<?php

namespace App\Repositories;

use App\Models\Resort;

class ResortRepository
{
    public function getActiveResorts()
    {
        return Resort::latest()->where('active', '=', Resort::STATUS_ACTIVE)->get();
    }
}
