<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWeatherTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('weather', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('georgia_country');
            $table->string('celsius');
            $table->dateTime('created_at');
            $table->dateTime('updated_at');



        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::create('weather',function(Blueprint $table){
            $table->dropColumn('id');
            $table->dropColumn('georgia_country');
            $table->dropColumn('celsius');
            $table->dropColumn('created_at');
            $table->dropColumn('updated_at');



        });
    }
}
