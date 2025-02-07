<?php

namespace App\Repositories;

use App\Interfaces\MessageRepositoryInterface;
use App\Models\Message;

class MessageRepository implements MessageRepositoryInterface
{
    public function create(array $data): Message
    {
        $message = new Message();
        return $message;
    }
}
