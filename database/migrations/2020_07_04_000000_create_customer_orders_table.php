<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCustomerOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customer_orders', function (Blueprint $table) {
            $table->id();
            $table->uuid("uuid");
            $table->integer('customer_id');
            $table->integer('seller_id');
            $table->string('name_product');
            $table->string('name_customer')->comment("Name user customer");
            $table->decimal('value_transaction', 10,2);
            $table->integer('type_payment')->comment("1 = Boleto 2 = Cartão de Crédito 3 = Cartao de Débito")->nullable();
            $table->string('payment_transaction')->comment("Code transaction gateway")->nullable();
            $table->string('token_transaction')->comment("Code transaction after facial recognition")->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('customer_orders');
    }
}
