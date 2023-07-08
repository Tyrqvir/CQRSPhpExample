<?php

declare(strict_types=1);

namespace App\MessageBus;

use App\Message\Command\CommandMessageInterface;
use Symfony\Component\Messenger\MessageBusInterface;

trait CommandBus
{
    private MessageBusInterface $messageBus;

    public function __construct(MessageBusInterface $commandBus)
    {
        $this->messageBus = $commandBus;
    }

    /**
     * @param CommandMessageInterface $command
     *
     */
    public function dispatch(CommandMessageInterface $command)
    {
        $this->messageBus->dispatch($command);
    }
}