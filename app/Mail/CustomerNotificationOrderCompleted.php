<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class CustomerNotificationOrderCompleted extends Mailable
{
    use Queueable, SerializesModels;


    /**
     * @var User
     */
    private $user;
    /**
     * @var Array
     */
    private $token;

    public function __construct(Array $user, String $token)
    {
        $this->user = $user;
        $this->token = $token;
    }

    public function build()
    {
        $name = $this->user['name'];
        $token = $this->token;

        return $this->subject('Mercado Livre - Compra Concluída')
            ->view('emails.customer.notification-order-completed',[
                'name'=>$name,
                'token'=>$token
            ]);
    }
}
