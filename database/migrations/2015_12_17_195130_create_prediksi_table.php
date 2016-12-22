<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePrediksiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        /*Schema::create('prediksi', function (Blueprint $table) {
            $table->increments('id');
            $table->string('cuaca');
            $table->string('arahangin');
            $table->double('kecmin');
            $table->double('kecmax');
            $table->double('tinggimin');
            $table->double('tinggimax');
            $table->integer('wilayah_id')->unsigned()->index();
            $table->foreign('wilayah_id')->references('id')->on('wilayah')->onDelete('cascade');
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
