<?php

namespace App\Jobs;

use http\Exception;
use Illuminate\Bus\Queueable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Support\Facades\Redis;

class SendLogs implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    //定義任務超時次數
    //public $tries = 5;

    //定義任務超時時間（second）
    //public $timeout = 25;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct()
    {
        //TODO
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        sleep(15);
        file_put_contents(storage_path('logs/test.log'), "0 \r\n", FILE_APPEND);
        //throw new \Exception('test');
    }

    /*public function failed(Exception $exception)
    {
        file_put_contents(storage_path('logs/test.log'), "Failed Queue \r\n");
    }*/

    //定義任務超時結束時間
    /*public function retryUntil() {
        return now()->addSeconds(10);
    }*/
}
