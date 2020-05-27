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
            $table->string('code')->unique();
            $table->string('codeCompany');
            $table->string('templateCode'); // codigo unico para bd template
            $table->string('title');
            $table->string('redSocialCode');
            $table->boolean('delete')->nullable();

            $table->foreign('codeCompany')->references('code')->on('tbl_company');
            $table->foreign('redSocialCode')->references('code')->on('tbl_redSocialCompany');
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
