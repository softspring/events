<?php

namespace Softspring\Component\Events;

use Symfony\Contracts\EventDispatcher\Event;
use Symfony\Contracts\EventDispatcher\EventDispatcherInterface;

trait DispatchTrait
{
    protected function dispatch(string $eventName, Event $event): void
    {
        if (empty($this->eventDispatcher) || !$this->eventDispatcher instanceof EventDispatcherInterface) {
            throw new \Exception(sprintf('This trait requires an eventDispatcher instance that implements %s', EventDispatcherInterface::class));
        }

        $this->eventDispatcher->dispatch($event, $eventName);
    }
}
