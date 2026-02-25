<?php

namespace Softspring\Component\Events\Tests;

use Exception;
use PHPUnit\Framework\TestCase;
use Symfony\Contracts\EventDispatcher\Event;
use Symfony\Contracts\EventDispatcher\EventDispatcherInterface;

class DispatchTraitTest extends TestCase
{
    public function test(): void
    {
        $eventDispatcher = $this->createMock(EventDispatcherInterface::class);
        $eventDispatcher->expects($this->once())->method('dispatch');
        $trait = new DispatchTraitClass($eventDispatcher);
        $trait->doDispatch('testEvent', new Event());
    }
}
