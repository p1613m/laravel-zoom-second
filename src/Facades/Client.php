<?php

namespace p1613m\Zoom\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Macsidigital\XeroLaravel\Skeleton\SkeletonClass
 */
class Client extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'zoom-second.client';
    }
}
