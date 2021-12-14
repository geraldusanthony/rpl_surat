<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSrtpermohonanmhsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('srtpermohonanmhs', function (Blueprint $table) {
            $table->id();
            $table->date('tgl_pelaksanaan');
            $table->string('lksi_kgt');
            $table->string('nm_mitra');
            $table->string('ket');
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
        Schema::dropIfExists('srtpermohonanmhs');
    }
}
