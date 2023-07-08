<?php

declare(strict_types=1);

namespace App\MessageHandler\Query;

use App\Message\Query\QueryMessage;
use Symfony\Component\Messenger\Handler\MessageHandlerInterface;

class QueryHandler implements MessageHandlerInterface
{
    public function __invoke(QueryMessage $getTotalAny): int
    {
        return $getTotalAny->getCount();
    }
}