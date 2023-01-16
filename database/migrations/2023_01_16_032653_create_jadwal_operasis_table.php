<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jadwal_operasis', function (Blueprint $table) {
            $table->id();
            $table->string('kode_booking');
            $table->string('no_bpjs');
            $table->dateTime('tanggal_operasi');
            $table->string('jenis_tindakan');
            $table->foreignId('poli_id')->constrained();
            $table->enum('terlaksana', [0, 1]);
            $table->softDeletes();
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
        Schema::dropIfExists('jadwal_operasis');
    }
};
