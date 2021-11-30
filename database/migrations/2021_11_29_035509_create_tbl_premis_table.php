<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTblPremisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_premis', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('perniagaan_id');
            $table->foreign('perniagaan_id')->references('id')->on('tbl_perniagaan');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tbl_premis');
    }
}
