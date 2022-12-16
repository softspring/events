<?php

namespace Softspring\Component\Events\Tests;

use Softspring\Component\Events\DispatchGetResponseTrait;
use Softspring\Component\Events\GetResponseEventInterface;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Contracts\EventDispatcher\EventDispatcherInterface;

class DispatchGetResponseTraitClass
{
    use DispatchGetResponseTrait;

    protected EventDispatcherInterface $eventDispatcher;

    public function __construct(EventDispatcherInterface $eventDispatcher)
    {
        $this->eventDispatcher = $eventDispatcher;
    }

    protected function get(): EventDispatcherInterface
    {
        return $this->eventDispatcher;
    }

    public function doDispatchWithResponse(string $eventName, GetResponseEventInterface $event): ?Response
    {
        $event->setResponse(new Response()); // this should be added by listeners

        return $this->dispatchGetResponse($eventName, $event);
    }

    public function doDispatchWithoutResponse(string $eventName, GetResponseEventInterface $event): ?Response
    {
        return $this->dispatchGetResponse($eventName, $event);
    }
}
