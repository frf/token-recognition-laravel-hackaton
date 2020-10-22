<?php

namespace App\Providers;

use App\Services\Api\CustomerInterface;
use App\Services\Api\CustomerOrderInterface;
use App\Services\Api\CustomerOrderService;
use App\Services\Api\CustomerService;
use App\Services\Api\FaceMatchInterface;
use App\Services\Api\FaceMatchService;
use App\Services\Api\OrderMailInterface;
use App\Services\Api\OrderMailService;
use App\Services\Api\SellerInterface;
use App\Services\Api\SellerService;
use Illuminate\Support\ServiceProvider;

class ServicesProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $this->app->bind(CustomerOrderInterface::class, CustomerOrderService::class);
        $this->app->bind(CustomerInterface::class, CustomerService::class);
        $this->app->bind(OrderMailInterface::class, OrderMailService::class);
        $this->app->bind(SellerInterface::class, SellerService::class);
        $this->app->bind(FaceMatchInterface::class, FaceMatchService::class);
    }
}
