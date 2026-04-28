<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
// --- ADD THESE TWO LINES ---
use App\Services\NotificationInterface;
use App\Services\EmailNotification;
// ---------------------------

class AppServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        // Now Laravel knows what these classes are!
        $this->app->bind(NotificationInterface::class, EmailNotification::class);
    }

    public function boot(): void
    {
        //
    }
}
