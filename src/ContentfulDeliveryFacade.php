<?php

namespace DansMaCulotte\Contentful;

use Contentful\Delivery\Client;
use Illuminate\Support\Facades\Facade;

/**
 * @see Client
 */
class ContentfulDeliveryFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'contentful';
    }
}
