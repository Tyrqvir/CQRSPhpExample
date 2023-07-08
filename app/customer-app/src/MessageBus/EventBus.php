<?php

namespace App\MessageBus;

use App\Message\Event\EventMessageInterface;
use Symfony\Component\Messenger\Envelope;
use Symfony\Component\Messenger\MessageBusInterface;

trait EventBus
{
    private MessageBusInterface $messageBus;

    public function __construct(MessageBusInterface $eventBus)
    {
        $this->messageBus = $eventBus;
    }

    /**
     * @param EventMessageInterface $event
     *
     * @return Envelope
     */
    public function dispatch(EventMessageInterface $event): Envelope
    {
        return $this->messageBus->dispatch($event);
    }
}