<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reservation', function (Blueprint $table) {
            $table->id();
            $table->string('name', 45);
            $table->string('email', 45);
            $table->string('phone',100);
            $table->dateTime('checkin_date');
            $table->dateTime('checkout_date');
            $table->unsignedInteger('room_id');
            $table->integer('price');
            $table->text('customer_request');
            $table->unsignedInteger('customer_id');

            $table->integer('updated_by')->default(0);
            $table->timestamps();
            $table->integer('created_by');
            $table->integer('deleted_by')->nullable;
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
};
