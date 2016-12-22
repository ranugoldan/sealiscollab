<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateWilayahTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        /*Schema::create('wilayah', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nama');
            $table->double('lat');
            $table->double('lon');
            $table->integer('stasiun_id')->unsigned()->index();
            $table->foreign('stasiun_id')->references('id')->on('stasiun')->onDelete('cascade');
            $table->timestamps();
        });*/
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        
    }
}
