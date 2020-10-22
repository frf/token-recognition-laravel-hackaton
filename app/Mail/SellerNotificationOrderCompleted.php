<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class SellerNotificationOrderCompleted extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * @var Array
     */
    private $user;
    /**
     * @var String
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

        return $this->subject('Mercado Livre - Venda Paga')
            ->view('emails.seller.notification-order-completed',[
                'name'=>$name,
                'token'=>$token
            ]);
    }
}
