<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStallJobTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('stall_job', function (Blueprint $table) {
            $table->increments('id');
            $table->string('company', 200);
            $table->string('logo',100);
            $table->string('URL', 250);
            $table->string('how_apply',50);
            $table->string('description',250);
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
        Schema::dropIfExists('stall_job');

    }


}
