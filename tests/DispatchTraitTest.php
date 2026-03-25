<?php

namespace Softspring\Component\Events\Tests;

use PHPUnit\Framework\TestCase;
use stdClass;
use Symfony\Contracts\EventDispatcher\EventDispatcherInterface;

class DispatchTraitTest extends TestCase
{
    public function testDispatchesGenericObjectEvents(): void
    {
        $eventDispatcher = $this->createMock(EventDispatcherInterface::class);
        $event = new stdClass();
        $eventDispatcher->expects($this->once())
            ->method('dispatch')
            ->with($event, 'testEvent');
        $trait = new DispatchTraitClass($eventDispatcher);
        $trait->doDispatch('testEvent', $event);
    }
}
