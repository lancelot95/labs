<?php

namespace App\Listeners;

use Illuminate\Http\Request;
use App\Events\NewsletterEvent;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Mail;
use App\Mail\XavierMail;

class NewsletterListener
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
     * @param  object  $event
     * @return void
     */
    public function handle(NewsletterEvent $event)
    {
        Mail::to($event->new)->send(new XavierMail($event->new));
    }
}
