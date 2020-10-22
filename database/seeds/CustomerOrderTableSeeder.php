<?php

use Illuminate\Database\Seeder;

class CustomerOrderTableSeeder extends Seeder {

    public function run()
    {
        DB::table('customer_orders')->insert(
            [
                [
                    'uuid' => \Webpatser\Uuid\Uuid::generate(),
                    'customer_id' => 10000,
                    'seller_id' => 20000,
                    'name_customer' => "Fabio Rocha",
                    'name_product' => "IPHONE 11",
                    'value_transaction' => 3000.00,
                    'type_payment' => null,
                    'payment_transaction' => null,
                    'token_transaction' => null,
                    'created_at' => \Carbon\Carbon::now()->subDays(2),
                    'updated_at' => \Carbon\Carbon::now()->subDays(2),
                ],
                [
                    'uuid' => \Webpatser\Uuid\Uuid::generate(),
                    'customer_id' => 10000,
                    'seller_id' => 20000,
                    'name_customer' => "Fabio Rocha",
                    'name_product' => "IPHONE 11",
                    'value_transaction' => 3000.00,
                    'type_payment' => null,
                    'payment_transaction' => \Webpatser\Uuid\Uuid::generate(),
                    'token_transaction' => \Webpatser\Uuid\Uuid::generate(),
                    'created_at' => \Carbon\Carbon::now(),
                    'updated_at' => \Carbon\Carbon::now(),
                ]
            ]
        );
    }

}
