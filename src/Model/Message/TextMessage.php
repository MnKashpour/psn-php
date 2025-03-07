<?php

namespace Tustin\PlayStation\Model\Message;

use Tustin\PlayStation\Enum\MessageType;
use Tustin\PlayStation\Model\Message\Sendable;
use Tustin\PlayStation\Model\Message\AbstractMessage;

class TextMessage extends AbstractMessage implements Sendable
{
    private $textMessage;

    public function __construct(string $textMessage)
    {
        $this->textMessage = $textMessage;
    }

    public function type(): MessageType
    {
        return MessageType::text();
    }

    public function build()
    {
        return [
            'messageType' => $this->type()->getValue(),
            'body' => $this->textMessage
        ];
    }

    public function fetch(): object
    {
        throw new \BadMethodCallException();
    }
}
