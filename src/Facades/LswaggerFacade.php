<?php

namespace Lonban\Lswagger\Facades;

use Illuminate\Support\Facades\Facade;

class LswaggerFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'Lswagger';
    }
}