<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TblBanners extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_banners', function (Blueprint $table) {
            $table->bigIncrements('id')->unique();
            $table->integer('idHome');
            $table->string('imgSrc');
            $table->string('description');
            

            $table->foreign('idHome')->references('id')->on('tbl_home');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tbl_banners');
    }
}
