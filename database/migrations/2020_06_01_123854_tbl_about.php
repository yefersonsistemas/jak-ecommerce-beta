<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TblAbout extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_about', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('code')->unique();
            $table->string('webConfigCode');
            $table->string('slogan');
            $table->string('title');
            $table->string('imgFirstBanner');
            $table->string('titleFirstPost');
            $table->string('contentFirstPost');
            $table->string('imgSecondBanner');
            $table->string('titleSecondPost');
            $table->string('contentSecondPost');

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
        Schema::dropIfExists('tbl_about');
    }
}
