<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTrainsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trains', function (Blueprint $table) {
            $table->id();
            $table->string("name_company", 30);
            $table->string("departure_station", 60);
            $table->string("arrival_station", 60);
            $table->datetime("departure_time");
            $table->datetime("arrival_time");
            $table->string("train_code", 6);
            $table->tinyInteger("number_carriages")->unsigned();
            $table->boolean("in_time")->default(1);
            $table->boolean("deleted")->default(0);
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
        Schema::dropIfExists('trains');
    }
}
