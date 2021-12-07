<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('customer_id');
            $table->foreign('customer_id')->references('id')->on('customers');
            $table->unsignedBigInteger('payment_method_id');
            $table->foreign('payment_method_id')->references('id')->on('payment_methods');
            $table->string('customers_name');
            $table->string('system_name');
            $table->integer('system_price');
            $table->string('system_category');
            $table->integer('down_payments')->nullable(true);
            $table->integer('remaining_payment->nullable(true)s')->nullable(true);
            $table->integer('total_payments')->nullable(true);
            $table->string('status');
            $table->string('evidence_payments')->nullable(true);
            $table->string('direct_payments')->nullable(true);
            $table->string('repayment_payments')->nullable(true);
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
        Schema::dropIfExists('orders');
    }
}
