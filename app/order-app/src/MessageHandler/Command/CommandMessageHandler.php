<?php

declare(strict_types=1);

namespace App\MessageHandler\Command;

use Psr\Log\LoggerInterface;
use Symfony\Component\Messenger\Handler\MessageHandlerInterface;

class CommandMessageHandler implements MessageHandlerInterface
{
    private LoggerInterface $logger;

    public function __construct(LoggerInterface $logger)
    {
        $this->logger = $logger;
    }

    public function __invoke($commandMessage)
    {
        $this->logger->info('2');
    }
}