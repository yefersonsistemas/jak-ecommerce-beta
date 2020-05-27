<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TblUsers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_users', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('code')->unique();
            $table->string('roleCode');
            $table->string('numPhone');
            $table->string('email')->unique();
            $table->string('user')->unique();
            $table->string('password');
            $table->string('firstName');
            $table->string('secoundName');
            $table->string('firstLastName');
            $table->string('secoundLastName');
            $table->string('statusCode');
            $table->string('direction');
            $table->boolean('delete');

            $table->foreign('statusCode')->references('code')->on('tbl_status');
            $table->foreign('roleCode')->references('code')->on('tbl_role');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tbl_users');
    }
}
