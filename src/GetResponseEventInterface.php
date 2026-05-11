<?php

declare(strict_types=1);

namespace Softspring\Component\Events;

use Symfony\Component\HttpFoundation\Response;

interface GetResponseEventInterface
{
    public function getResponse(): ?Response;

    public function setResponse(?Response $response): void;
}
