<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TblCarShop extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_carShop', function (Blueprint $table) {
            $table->string('ip');
            $table->integer('cantidad');
            $table->string('codeProduct');

            $table->foreign('codeProduct')->references('code')->on('tbl_productos');

    });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tbl_carShop');
    }
}
