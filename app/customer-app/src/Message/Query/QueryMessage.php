<?php

declare(strict_types=1);

namespace App\Message\Query;

class QueryMessage implements QueryMessageInterface
{
    private int $count;

    public function __construct(int $count)
    {
        $this->count = $count;
    }

    public function getCount(): int
    {
        return $this->count;
    }
}