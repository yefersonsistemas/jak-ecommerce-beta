<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TblProductos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_product', function (Blueprint $table) {
                $table->bigIncrements('id');
                $table->string('code')->unique();
                $table->string('name');
                $table->string('imgSrc');
                $table->string('description');
                $table->string('shortDescription');
                $table->string('typeCode');
                $table->string('typeModel');
                $table->string('materials');
                $table->float('actualPrice');
                $table->integer('existence')->nullable();
                $table->timestamp('insertDate')->nullable();
                $table->timestamp('upDate')->nullable();

                $table->foreign('typeCode')->references('code')->on('tbl_poductsType');
                $table->foreign('typeModel')->references('code')->on('tbl_typeModel');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tbl_product');
    }
}
