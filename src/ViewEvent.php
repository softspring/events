<?php

declare(strict_types=1);

namespace Softspring\Component\Events;

use ArrayObject;
use Symfony\Component\HttpFoundation\Request;

class ViewEvent extends RequestEvent
{
    protected ArrayObject $data;

    public function __construct(array|ArrayObject $data, protected ?Request $request = null)
    {
        parent::__construct($request);

        if (is_array($data)) {
            $data = new ArrayObject($data);
        }

        $this->data = $data;
    }

    public function getData(): ArrayObject
    {
        return $this->data;
    }
}
