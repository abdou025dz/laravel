<?php

namespace App\Services;

class EmailNotification implements NotificationInterface{
    public function send(string $message): string{
        return "Email envoye avec le message: $message";
    }
}

namespace App\Services;

class SmsNotification implements NotificationInterface{
    public function send(string $message): string{
        return "SMS envoyer avec le message : $message";
    }
}

