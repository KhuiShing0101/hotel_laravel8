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
        Schema::create('room_special_features_id', function (Blueprint $table)
        {
            $table->unsignedInteger('id' );
            $table->unsignedInteger('room_id' );
            $table->unsignedInteger('specials_features_id');

            $table->integer ('updated_by')->default(0);
            $table->integer ('created_by');
            $table->timestamps();
            $table->integer ('deleted_by')->nullable();
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
        Schema::dropIfExists('room_special_features_id');
    }
};
