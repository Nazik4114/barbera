<?php

namespace App\Services;

use Illuminate\Database\Eloquent\Collection;

class GetServices
{

    public static function getServices(Collection $services): string
    {
        $servicesStr = '';
        foreach ($services as $service) {
            $servicesStr .= $service->name . ', ';
        }
        $servicesStr = substr($servicesStr, 0, strlen($servicesStr) - 2);

        return $servicesStr;
    }

}
