<?php

namespace App\Listeners;

use App\Events\FindMatch;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class FindMatchListener
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
     * @param  FindMatch  $event
     * @return void
     */
    public function handle(FindMatch $event)
    {
        //
    }
}
