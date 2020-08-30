<?php

namespace App\Providers;

use App\Nerd;
use App\Providers\UnknownEvent;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

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
//        this will be triggered if event in controller is triggered
//        dump($event->nerd);
        return;
    }
}
