<?php

namespace App\Services\Api;

use App\Jobs\CustomerSendNotificationOrderCompletedEmailJob;
use App\Jobs\SellerSendNotificationOrderCompletedEmailJob;
use Auth;

class OrderMailService implements OrderMailInterface
{

    public function sendMailCustomer(Array $user, String $token): void
    {
        // TODO: Implement sendMailCustomer() method.

      /*  $user['name'] = "Fabio Rocha";
        $user['email'] = "mercadotokencomprador@gmail.com";
        $token = Uuid::generate();*/

        dispatch(new CustomerSendNotificationOrderCompletedEmailJob($user, $token))
            ->delay(now());
    }

    public function sendMailSeller(Array $user, String $token): void
    {
        // TODO: Implement sendMailSeller() method.

/*        $user['name'] = "João Silva";
        $user['email'] = "mercadotokenvendedor@gmail.com";
        $token = Uuid::generate();*/

        dispatch(new SellerSendNotificationOrderCompletedEmailJob($user, $token))
            ->delay(now());
    }
}
