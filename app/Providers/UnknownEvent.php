<?php

namespace App\Providers;

use App\Nerd;
use Illuminate\Broadcasting\Channel;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class UnknownEvent
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    public $nerd;

    /**
     * Create a new event instance.
     *
     * @param  \App\Nerd  $nerd
     */
    public function __construct(Nerd $nerd)
    {
        $this->nerd = $nerd;
    }
}
