<?php

namespace Ubxty\UAParser\Facades;

use Illuminate\Support\Facades\Facade;

class UAParser extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'ua-parser';
    }
}
