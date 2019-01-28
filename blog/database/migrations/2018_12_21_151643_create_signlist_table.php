<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSignlistTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('signlist', function (Blueprint $table) {
            $table->increments('signlist_id');
            $table->integer('act_id')->unsigned();
            $table->string('mem_id');
            $table->timestamps();
        });
        Schema::table('signlist', function (Blueprint $table){
            $table->foreign('act_id')->references('act_id')->on('actsign');
            $table->foreign('mem_id')->references('mem_id')->on('memberinfo');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('signlist');
    }
}
