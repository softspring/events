<?php

namespace Softspring\Component\Events;

use Symfony\Contracts\EventDispatcher\Event;

trait DispatchTrait
{
    protected function dispatch(string $eventName, Event $event): void
    {
        $this->eventDispatcher->dispatch($event, $eventName);
    }
}
