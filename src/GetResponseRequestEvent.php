<?php

declare(strict_types=1);

namespace Softspring\Component\Events;

class GetResponseRequestEvent extends RequestEvent implements GetResponseEventInterface
{
    use GetResponseTrait;
}
