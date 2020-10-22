<?php


namespace App\Services\Api;


use App\Models\User;
use Ramsey\Collection\Collection;

interface SellerInterface
{
    public function getSeller(int $userId) : User;
}
