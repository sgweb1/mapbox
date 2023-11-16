<?php

namespace Sgweb1\Mapbox\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Sgweb1\Mapbox\Mapbox
 */
class Mapbox extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \Sgweb1\Mapbox\Mapbox::class;
    }
}
