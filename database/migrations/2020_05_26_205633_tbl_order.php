<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TblOrder extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_order', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('code')->unique();
            $table->string('userCode');
            $table->float('total');
            $table->boolean('indicted')->nullable();
            $table->date('register');
            $table->boolean('cancelated');
            $table->float('tax');
            $table->date('emission');

            $table->foreign('userCode')->references('code')->on('tbl_users');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tbl_order');
    }
}
