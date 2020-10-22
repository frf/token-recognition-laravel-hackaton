<?php

namespace App\Jobs;

use App\Mail\CustomerNotificationOrderCompleted;
use Illuminate\Support\Facades\Mail;
use Illuminate\Bus\Queueable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;

class CustomerSendNotificationOrderCompletedEmailJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;


    /**
     * @var String
     */
    private $token;
    /**
     * @var Array
     */
    private $user;

    public function __construct(Array $user, String $token)
    {

        $this->token = $token;
        $this->user = $user;
    }

    public function handle()
    {
        Mail::to($this->user['email'])->send(new CustomerNotificationOrderCompleted($this->user, $this->token));
    }
}
