<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateWarehousesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('warehouses', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name')->nullable();
            $table->string('manager_img')->nullable();
            $table->string('phone')->nullable();
            $table->string('nid')->nullable();
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->string('warehouse_name')->nullable();
            $table->string('warehouse_img')->nullable();
            $table->string('city')->nullable();
            $table->string('address')->nullable();
            $table->string('document')->nullable();
            $table->string('approve')->nullable();
            $table->string('block')->nullable();
            $table->rememberToken();
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
        Schema::dropIfExists('warehouses');
    }
}
