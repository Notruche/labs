<?php

namespace App\Listeners;

use App\Events\MailEvent;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Mail;
use App\Mail\TestMail;

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
     * @param  MailEvent  $event
     * @return void
     */
    public function handle(MailEvent $event)
    {
    Mail::to($event->request)->send(New TestMail($event->request));
    }
}
