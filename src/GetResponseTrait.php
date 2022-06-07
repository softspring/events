<?php

namespace Softspring\Component\Events;

use Symfony\Component\HttpFoundation\Response;

trait GetResponseTrait
{
    protected ?Response $response = null;

    public function getResponse(): ?Response
    {
        return $this->response;
    }

    public function setResponse(?Response $response): void
    {
        $this->response = $response;
    }
}
