<?php

namespace Softspring\Component\Events\Tests;

use PHPUnit\Framework\TestCase;
use Softspring\Component\Events\GetResponseEvent;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Contracts\EventDispatcher\EventDispatcherInterface;

class DispatchGetResponseTraitTest extends TestCase
{
    public function testWithResponse()
    {
        $eventDispatcher = $this->createMock(EventDispatcherInterface::class);
        $eventDispatcher->expects($this->once())->method('dispatch');
        $trait = new DispatchGetResponseTraitClass($eventDispatcher);
        $response = $trait->doDispatchWithResponse('testEvent', new GetResponseEvent());
        $this->assertInstanceOf(Response::class, $response);
    }

    public function testWithoutResponse()
    {
        $eventDispatcher = $this->createMock(EventDispatcherInterface::class);
        $eventDispatcher->expects($this->once())->method('dispatch');
        $trait = new DispatchGetResponseTraitClass($eventDispatcher);
        $response = $trait->doDispatchWithoutResponse('testEvent', new GetResponseEvent());
        $this->assertNull($response);
    }
}
