<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMarketsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('markets', function (Blueprint $table) {
            
            $table->bigIncrements('id');
            $table->string('name');
            $table->text('address');
            $table->bigInteger('city_id');
            $table->string('phone1');
            $table->string('phone2')->nullable();
            $table->string('mobil')->nullable();
            $table->string('website')->nullable();
            $table->string('email')->nullable();
            $table->text('description');
            $table->time('opening_hour_weekdays')->nullable();
            $table->time('closing_hour_weekdays')->nullable();
            $table->time('opening_hour_saturday')->nullable();
            $table->time('closing_hour_saturday')->nullable();
            $table->time('opening_hour_sunday')->nullable();
            $table->time('closing_hour_sunday')->nullable();

            $table->timestamps();

            $table->foreign('city_id')->references('id')->on('cities')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('markets');
    }
}
