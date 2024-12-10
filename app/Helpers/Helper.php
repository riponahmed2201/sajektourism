<?php

use App\Repositories\ResortRepository;

if (!function_exists('getResorts')) {
    function getResorts()
    {
        $repository = app(ResortRepository::class);
        return $repository->getActiveResorts();
    }
}
