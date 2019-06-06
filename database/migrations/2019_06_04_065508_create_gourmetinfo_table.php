<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGourmetinfoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('gourmetinfo', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('gourmets_id');
            $table->string('info',12000);
            $table->bigInteger('zancounts');
            $table->unsignedSmallInteger('pay');
            $table->time('opentime');
            $table->time('closetime');
            $table->string('address');
            $table->string('telphone');
            $table->string('topimg');
            $table->integer('longitude');
            $table->integer('latitude');
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
        Schema::dropIfExists('gourmetinfo');
    }
}
