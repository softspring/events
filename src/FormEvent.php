<?php

namespace Softspring\Component\Events;

use Symfony\Component\Form\FormInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Contracts\EventDispatcher\Event;

class FormEvent extends Event
{
    protected ?Request $request;

    protected FormInterface $form;

    public function __construct(FormInterface $form, ?Request $request = null)
    {
        $this->form = $form;
        $this->request = $request;
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
