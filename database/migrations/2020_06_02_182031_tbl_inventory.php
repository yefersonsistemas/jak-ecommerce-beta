<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TblInventory extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_inventory', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('code')->unique();
            $table->string('codeProducto');
            $table->integer('cantidad');
            $table->string('typeCode');
            $table->string('classCode');

            $table->foreign('typeCode')->references('code')->on('tbl_poductsType');
            $table->foreign('codeProducto')->references('code')->on('tbl_productos');
            $table->foreign('classCode')->references('code')->on('tbl_productosClass');

    });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tbl_inventory');
    }
}
