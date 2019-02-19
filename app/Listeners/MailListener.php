<?php

namespace App\Listeners;

use Illuminate\Http\Request;
use App\Events\MailEvent;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Mail;
use App\Mail\LancelotMail;

class MailListener
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  Mail  $event
     * @return void
     */
    public function handle(MailEvent $event)
    {
        Mail::to($event->lancelot)->send(new LancelotMail($event->lancelot));
    }
}
