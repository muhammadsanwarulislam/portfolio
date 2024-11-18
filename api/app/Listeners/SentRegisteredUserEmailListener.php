<?php

namespace App\Listeners;

use Repository\User\UserRepository;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use App\Events\SentRegisteredUserEmailEvent;
use Illuminate\Support\Facades\Notification;
use Repository\CitizenInfo\CitizenInfoRepository;
use App\Notifications\RegisteredUserConfirmationMail;

class SentRegisteredUserEmailListener implements ShouldQueue
{

    public function handle(SentRegisteredUserEmailEvent $event)
    {
        Notification::send($event->user, new RegisteredUserConfirmationMail($event->user));
    }
}
