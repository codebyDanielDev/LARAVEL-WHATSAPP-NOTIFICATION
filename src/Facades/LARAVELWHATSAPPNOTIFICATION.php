<?php

namespace Danielowoow\LARAVELWHATSAPPNOTIFICATION\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Danielowoow\LARAVELWHATSAPPNOTIFICATION\LARAVELWHATSAPPNOTIFICATION
 */
class LARAVELWHATSAPPNOTIFICATION extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return \Danielowoow\LARAVELWHATSAPPNOTIFICATION\LARAVELWHATSAPPNOTIFICATION::class;
    }
}
