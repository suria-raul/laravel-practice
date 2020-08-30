<?php

namespace App\Providers;

use App\Nerd;
use App\Providers\UnknownEvent;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Mail;

class UnknownListener
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
     * @param  UnknownEvent  $event
     * @return void
     */
    public function handle(UnknownEvent $event)
    {
        Mail::to($event->nerd)->send();
    }
}
