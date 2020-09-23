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
            $table->string('shifting_date')->nullable();
            $table->string('shifting_time')->nullable();
            $table->string('from')->nullable();
            $table->string('to')->nullable();
            $table->string('goods_name')->nullable();
            $table->string('goods_type')->nullable();
            $table->string('weight')->nullable();
            $table->string('distance')->nullable();
            $table->string('total_amount')->nullable();
            $table->string('paid_amount')->nullable();
            $table->string('trxid')->nullable();
            $table->string('status_dr')->nullable();
            $table->string('status_fr')->nullable();
            $table->string('gatepass_fr')->nullable();
            $table->string('status_to')->nullable();
            $table->string('gatepass_to')->nullable();
            $table->string('approval')->nullable();
            $table->string('rejection_cs')->nullable();
            $table->string('cancel')->nullable();
            $table->string('cancel_cs')->nullable();
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
