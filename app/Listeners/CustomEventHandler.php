<?php

namespace App\Listeners;

use App\Events\CustomEvent;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class CustomEventHandler
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
     * @param  \App\Events\CustomEvent  $event
     * @return void
     */
    public function handle(CustomEvent $event)
    {
        //
    }
}
