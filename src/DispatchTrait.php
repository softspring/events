<?php

namespace Softspring\Component\Events;

trait DispatchTrait
{
    protected function dispatch(string $eventName, object $event): void
    {
        $this->eventDispatcher->dispatch($event, $eventName);
    }
}
