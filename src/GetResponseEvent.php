<?php

declare(strict_types=1);

namespace Softspring\Component\Events;

use Symfony\Contracts\EventDispatcher\Event;

class GetResponseEvent extends Event implements GetResponseEventInterface
{
    use GetResponseTrait;
}
