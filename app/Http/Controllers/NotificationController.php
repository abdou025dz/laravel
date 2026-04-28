<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Services\NotificationInterface;

class NotificationController extends Controller
{
    //
    protected $notifier;

    public function __construct(NotificationInterface $notifier){
        $this->notifier = $notifier;
    }

    public function notify(){
        $message = "Bienvenu a notre application laravel";
        return $this->notifier->send($message);
    }

}
