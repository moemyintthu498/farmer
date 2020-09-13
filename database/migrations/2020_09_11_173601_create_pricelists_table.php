<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePricelistsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pricelists', function (Blueprint $table) {
             $table->id();
            $table->date('pdate');
            $table->time('ptime');
            $table->integer('sellprice');
            $table->integer('buyprice');
            $table->unsignedBigInteger('crop_id');
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
        Schema::dropIfExists('pricelists');
    }
}
