<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTblBayaranTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_bayaran', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('permohonan_id');
            $table->foreign('permohonan_id')->references('id')->on('tbl_permohonan');

            $table->unsignedBigInteger('kaedah_bayaran_id');
            $table->foreign('kaedah_bayaran_id')->references('id')->on('tbl_kaedah_bayaran');

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
        Schema::dropIfExists('tbl_bayaran');
    }
}
