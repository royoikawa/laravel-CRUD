<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMemberregisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('memberregis', function (Blueprint $table) {
            $table->string('regis_id',9)->primary();
            $table->string('regis_name',10);
            $table->string('regis_class',10);
            $table->string('regis_acc',30);
            $table->string('regis_password',30);
            $table->string('regis_email',30);
            $table->string('regis_phone',10);
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
        Schema::dropIfExists('memberregis');
    }
}
