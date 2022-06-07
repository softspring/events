<?php

namespace Softspring\Component\Events;

class GetResponseRequestEvent extends RequestEvent implements GetResponseEventInterface
{
    use GetResponseTrait;
}
