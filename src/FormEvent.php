<?php

namespace Softspring\Component\Events;

use Symfony\Component\Form\FormInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Contracts\EventDispatcher\Event;

class FormEvent extends Event
{
    public function __construct(protected FormInterface $form, protected ?Request $request = null)
    {
    }

    public function getForm(): FormInterface
    {
        return $this->form;
    }

    public function getRequest(): ?Request
    {
        return $this->request;
    }
}
