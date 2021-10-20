<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Log;

class NewJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    //https://allaravel.com/blog/laravel-queue-xu-ly-cong-viec-kieu-hang-doi
    protected $booking;
    //public $tries = 3;
    //public $timeout = 60;
    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct($booking)
    {
        //
        $this->booking = $booking;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        Log::error('ss',['sss'=>$this->booking]);
    }
}
