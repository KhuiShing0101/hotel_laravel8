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
        Schema::create('special_features', function (Blueprint $table)
        {
            $table->unsignedInteger('id' );
            $table->string('name',100);

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
        Schema::dropIfExists('special_features');
    }
};
