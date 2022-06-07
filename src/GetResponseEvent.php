<?php

namespace Softspring\Component\Events;

use Symfony\Contracts\EventDispatcher\Event;

class GetResponseEvent extends Event implements GetResponseEventInterface
{
    use GetResponseTrait;
}
