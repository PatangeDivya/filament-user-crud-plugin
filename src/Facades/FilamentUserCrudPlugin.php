<?php

namespace PatangeDivya\FilamentUserCrudPlugin\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \PatangeDivya\FilamentUserCrudPlugin\FilamentUserCrudPlugin
 */
class FilamentUserCrudPlugin extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \PatangeDivya\FilamentUserCrudPlugin\FilamentUserCrudPlugin::class;
    }
}
