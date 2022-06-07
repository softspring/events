<?php

namespace Softspring\Component\Events\Tests;

use PHPUnit\Framework\TestCase;
use Symfony\Contracts\EventDispatcher\Event;
use Symfony\Contracts\EventDispatcher\EventDispatcherInterface;

class DispatchTraitTest extends TestCase
{
    public function test()
    {
        $eventDispatcher = $this->createMock(EventDispatcherInterface::class);
        $eventDispatcher->expects($this->once())->method('dispatch');
        $trait = new DispatchTraitClass($eventDispatcher);
        $trait->doDispatch('testEvent', new Event());
    }

    public function testWithoutEventDispatcher()
    {
        $this->expectException(\Exception::class);
        $trait = new DispatchTraitClass(null);
        $trait->doDispatch('testEvent', new Event());
    }
}
