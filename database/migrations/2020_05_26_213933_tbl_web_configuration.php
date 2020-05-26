<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TblWebConfiguration extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_webConfiguration', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('code');
            $table->string('codeCompany');
            $table->string('templateCode');
            $table->string('title');
            $table->string('redSocialCode');
            $table->boolean('delete');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tbl_webConfiguration');
    }
}
