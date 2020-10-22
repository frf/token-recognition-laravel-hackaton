<?php

namespace App\Services\Api;

use App\Models\CustomerOrder;
use Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Collection;


interface CustomerOrderInterface
{
    /**
     * @return Collection
     */
    public function getCustomerOrders() : Collection;
    public function getCustomerOrdersByUserId(int $userId) : Collection;
    public function createCustomerOrders(Request $request) : CustomerOrder;
    public function validateCustomerOrders(String $uuid) : CustomerOrder;
    public function verifiedCustomerOrders(Request $request) : bool ;
}
