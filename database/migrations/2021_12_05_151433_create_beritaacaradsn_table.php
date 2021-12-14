<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBeritaacaradsnTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('beritaacaradsn', function (Blueprint $table) {
            $table->id();
            $table->string('jenis_srt');
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
        Schema::dropIfExists('beritaacaradsn');
    }
}
