<?php


namespace App\Listeners;

use Illuminate\Auth\Events\Login;
use \Illuminate\Events\Dispatcher;

class UserEventSubscriber
{
    public function handleUserLogin($event)
    {
        // TODO: write user login in
    }

    public function subscribe(Dispatcher $events)
    {
        $events->listen(
            Login::class,
            [UserEventSubscriber::class, 'handleUserLogin']
        );
    }
}
