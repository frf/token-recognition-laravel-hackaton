<?php

namespace App\Services\Api;

use Auth;
use Illuminate\Support\Collection;


interface OrderMailInterface
{
    /**
     * @param array $user
     * @param String $token
     * @return bool
     */
    public function sendMailCustomer(Array $user, String $token) : void;

    /**
     * @param array $user
     * @param String $token
     * @return bool
     */
    public function sendMailSeller(Array $user, String $token) : void;
}
