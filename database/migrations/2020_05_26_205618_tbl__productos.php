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
        Schema::create('tbl_productos', function (Blueprint $table) {
                $table->bigIncrements('id');
                $table->string('code')->unique();
                $table->string('name');
                $table->string('imgSrc');
                $table->string('descripcion');
                $table->string('shortDescripcion');
                $table->string('typeCode');
                $table->string('materials');
                $table->float('actualPrice');
                $table->integer('existenc');
                $table->timestamp('insertDate')->nullable();
                $table->timestamp('upDate')->nullable();

                $table->foreign('typeCode')->references('code')->on('tbl_poductsType');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tbl_productos');
    }
}
