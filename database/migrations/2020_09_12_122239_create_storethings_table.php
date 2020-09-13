<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStorethingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('storethings', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('crop_id');
            $table->integer('buyprice');
            $table->integer('qty');
            $table->timestamps();

             $table->foreign('crop_id')
                    ->references('id')
                    ->on('crops')
                    ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('storethings');
    }
}
