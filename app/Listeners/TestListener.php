<?php

namespace App\Listeners;

use App\Events\Test;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class TestListener implements ShouldQueue
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
     * @param  Test  $event
     * @return void
     */
    public function handle(Test $event)
    {
        $t = $event->t;

        sleep(10);
        file_put_contents(storage_path('logs/test.log'), '111');
    }
}
