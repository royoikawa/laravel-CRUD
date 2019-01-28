<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMemberinfoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('memberinfo', function (Blueprint $table) {
            $table->string('mem_id',9)->primary();
            $table->string('mem_name',10);
            $table->string('mem_class',10);
            $table->string('mem_acc',30);
            $table->string('mem_password',30);
            $table->string('mem_email',30);
            $table->string('mem_phone',10);
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
        Schema::dropIfExists('memberinfo');
    }
}
