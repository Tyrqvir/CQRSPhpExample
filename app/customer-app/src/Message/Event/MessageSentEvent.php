<?php

declare(strict_types=1);

namespace App\Message\Event;

class MessageSentEvent implements EventMessageInterface
{
    private int $content;

    public function __construct(int $content)
    {
        $this->content = $content;
    }

    public function getContent(): int
    {
        return $this->content;
    }
}