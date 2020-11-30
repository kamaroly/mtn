<?php

namespace Kamaro\Mtn;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Kamaro\Mtn\Mtn
 */
class MtnFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'mtn';
    }
}
