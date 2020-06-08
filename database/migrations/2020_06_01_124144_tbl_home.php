<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TblHome extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_home', function (Blueprint $table) {
            $table->bigIncrements('id')->unique();
            $table->string('webConfigCode');
            $table->string('imgNewArrival');
            $table->string('imgTopPicks');

            $table->foreign('webConfigCode')->references('code')->on('tbl_webConfiguration');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tbl_home');
    }
}
