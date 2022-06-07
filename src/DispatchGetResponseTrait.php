<?php

namespace Softspring\Component\Events;

use Symfony\Component\HttpFoundation\Response;

trait DispatchGetResponseTrait
{
    use DispatchTrait;

    protected function dispatchGetResponse(string $eventName, GetResponseEventInterface $event): ?Response
    {
        $this->dispatch($eventName, $event);

        if ($event->getResponse()) {
            return $event->getResponse();
        }

        return null;
    }
}
