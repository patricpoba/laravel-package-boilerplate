<?php

namespace Qodehub\TicketingApp;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Qodehub\TicketingApp\Skeleton\SkeletonClass
 */
class TicketingAppFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'ticketing-app';
    }
}
