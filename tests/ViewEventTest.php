<?php

namespace Softspring\Component\Events\Tests;

use PHPUnit\Framework\TestCase;
use Softspring\Component\Events\ViewEvent;
use Symfony\Contracts\EventDispatcher\Event;

class ViewEventTest extends TestCase
{
    public function testInterfaces()
    {
        $event = new ViewEvent(new \ArrayObject());

        $this->assertInstanceOf(Event::class, $event);
    }

    public function testGetDataEmpty()
    {
        $event = new ViewEvent(new \ArrayObject());
        $this->assertEquals([], (array) $event->getData());
    }

    public function testGetData()
    {
        $event = new ViewEvent(new \ArrayObject(['test' => 1, 'other' => 'yes']));
        $this->assertEquals(['test' => 1, 'other' => 'yes'], (array) $event->getData());
    }

    public function testInvalid()
    {
        $this->expectException(\InvalidArgumentException::class);

        new ViewEvent(new \stdClass());
    }

    public function testWithArray()
    {
        $event = new ViewEvent(['is_array' => true]);
        $this->assertEquals(['is_array' => true], (array) $event->getData());
    }
}
