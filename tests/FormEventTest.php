<?php

namespace Softspring\Component\Events\Tests;

use PHPUnit\Framework\TestCase;
use Softspring\Component\Events\FormEvent;
use Symfony\Component\Form\Forms;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Contracts\EventDispatcher\Event;

class FormEventTest extends TestCase
{
    public function testInterfaces()
    {
        $formFactory = Forms::createFormFactory();
        $form = $formFactory->create();
        $event = new FormEvent($form);

        $this->assertInstanceOf(Event::class, $event);
    }

    public function testGetForm()
    {
        $formFactory = Forms::createFormFactory();
        $form = $formFactory->create();
        $event = new FormEvent($form);

        $this->assertEquals($form, $event->getForm());
    }

    public function testGetRequest()
    {
        $formFactory = Forms::createFormFactory();
        $form = $formFactory->create();
        $request = new Request();
        $event = new FormEvent($form, $request);

        $this->assertEquals($request, $event->getRequest());
    }
}
