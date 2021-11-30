<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTblPenilaianTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_penilaian', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('mesyuarat_id');
            $table->foreign('mesyuarat_id')->references('id')->on('tbl_mesyuarat');

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
        Schema::dropIfExists('tbl_penilaian');
    }
}
