<?php

namespace DansMaCulotte\Contentful\Tests\Unit;

use Contentful\Delivery\Client;
use DansMaCulotte\Contentful\ContentfulDeliveryFacade;
use DansMaCulotte\Contentful\Tests\TestCase;

class ClientTest extends TestCase
{
    public function testGetSpace()
    {
        $this->assertInstanceOf(Client::class, ContentfulDeliveryFacade::getFacadeRoot());
    }
}
