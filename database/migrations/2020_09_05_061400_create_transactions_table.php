<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTransactionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transactions', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id');//user making transactions
            $table->integer('qrcode_owner_id')->nullable();
            $table->integer('qrcode_id');
            $table->string('payment_method');//paypal, paystack,stripe
            $table->longText('message')->nullable();
            $table->float('amount',10, 4);
            $table->string('status')->default('initiated');//initiated, completed payment failed, completed payment successful.
            $table->softDeletes();
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
        Schema::dropIfExists('transactions');
    }
}