<?php

namespace App\Interfaces;

use App\Models\Message;

interface MessageRepositoryInterface
{
    public function create(array $data): Message;
}
