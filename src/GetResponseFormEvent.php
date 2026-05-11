<?php

declare(strict_types=1);

namespace Softspring\Component\Events;

class GetResponseFormEvent extends FormEvent implements GetResponseEventInterface
{
    use GetResponseTrait;
}
