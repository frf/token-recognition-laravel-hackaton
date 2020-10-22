<?php


namespace App\Services\Api;


use App\Models\User;
use Ramsey\Collection\Collection;

class SellerService implements SellerInterface
{

    public function getSeller(int $userId): User
    {
        // TODO: Implement getSeller() method.

        return User::find(10000);
    }
}
