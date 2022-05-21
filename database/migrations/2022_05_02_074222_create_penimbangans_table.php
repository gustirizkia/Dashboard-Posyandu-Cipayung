<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePenimbangansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('penimbangans', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_anak')->constrained('balitas');
            $table->date('tanggal_penimbangan');
            $table->bigInteger('usia');
            $table->integer('berat_badan');
            $table->integer('lingkar_perut');
            $table->longText('saran');
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
        Schema::dropIfExists('penimbangans');
    }
}
