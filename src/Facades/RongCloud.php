<?php

namespace Shankesgk2\RongCloud\Facades;

use Illuminate\Support\Facades\Facade;

class RongCloud extends Facade
{
    /**
     * Return the facade accessor.
     *
     * @return string
     */
    public static function getFacadeAccessor()
    {
        return 'RongCloud';
    }

    /**
     * Return the facade accessor.
     *
     * @return string
     */
    public static function RongCloud()
    {
        return app('RongCloud');
    }
}
