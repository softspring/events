<?php

declare(strict_types=1);

namespace Softspring\Component\Events\Tests;

use ArrayObject;
use InvalidArgumentException;
use stdClass;
use PHPUnit\Framework\TestCase;
use Softspring\Component\Events\ViewEvent;
use Symfony\Contracts\EventDispatcher\Event;

class ViewEventTest extends TestCase
{
    public function testInterfaces(): void
    {
        $event = new ViewEvent(new ArrayObject());

        $this->assertInstanceOf(Event::class, $event);
    }

    public function testGetDataEmpty(): void
    {
        $event = new ViewEvent(new ArrayObject());
        $this->assertEquals([], (array) $event->getData());
    }

    public function testGetData(): void
    {
        $event = new ViewEvent(new ArrayObject(['test' => 1, 'other' => 'yes']));
        $this->assertEquals(['test' => 1, 'other' => 'yes'], (array) $event->getData());
    }

    public function testWithArray(): void
    {
        $event = new ViewEvent(['is_array' => true]);
        $this->assertEquals(['is_array' => true], (array) $event->getData());
    }
}
