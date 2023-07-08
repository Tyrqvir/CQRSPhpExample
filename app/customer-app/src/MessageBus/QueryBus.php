<?php

declare(strict_types=1);

namespace App\MessageBus;

use App\Message\Query\QueryMessageInterface;
use Symfony\Component\Messenger\HandleTrait;
use Symfony\Component\Messenger\MessageBusInterface;

trait QueryBus
{
    use HandleTrait;

    public function __construct(MessageBusInterface $queryBus)
    {
        $this->messageBus = $queryBus;
    }

    /**
     * @param QueryMessageInterface $query
     *
     * @return mixed The handler returned value
     */
    public function dispatch(QueryMessageInterface $query)
    {
        return $this->handle($query);
    }
}