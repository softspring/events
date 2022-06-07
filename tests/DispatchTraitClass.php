<?php

namespace Softspring\Component\Events\Tests;

use Softspring\Component\Events\DispatchTrait;
use Symfony\Contracts\EventDispatcher\Event;
use Symfony\Contracts\EventDispatcher\EventDispatcherInterface;

class DispatchTraitClass
{
    use DispatchTrait;

    /**
     * @var EventDispatcherInterface
     */
    protected $eventDispatcher;

    public function __construct($eventDispatcher)
    {
        $this->eventDispatcher = $eventDispatcher;
    }

    protected function get(): EventDispatcherInterface
    {
        return $this->eventDispatcher;
    }

    public function doDispatch(string $eventName, Event $event)
    {
        $this->dispatch($eventName, $event);
    }
}
