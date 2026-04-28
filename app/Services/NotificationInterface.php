<?php

namespace App\Services;

interface NotificationInterface{
    public function send(string $message): string;
}
