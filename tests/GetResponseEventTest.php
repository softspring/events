<?php

namespace Softspring\Component\Events\Tests;

use PHPUnit\Framework\TestCase;
use Softspring\Component\Events\GetResponseEvent;
use Softspring\Component\Events\GetResponseEventInterface;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Contracts\EventDispatcher\Event;

class GetResponseEventTest extends TestCase
{
    public function testInterfaces()
    {
        $event = new GetResponseEvent();

        $this->assertInstanceOf(GetResponseEventInterface::class, $event);
        $this->assertInstanceOf(Event::class, $event);
    }

    public function testGetResponse()
    {
        $event = new GetResponseEvent();

        $event->setResponse(null);
        $this->assertNull($event->getResponse());

        $event->setResponse($response = new Response());
        $this->assertEquals($response, $event->getResponse());
    }
}
