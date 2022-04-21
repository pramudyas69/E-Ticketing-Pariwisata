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
        Schema::create('tikets', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->bigInteger('nik');
            $table->bigInteger('no_hp');
            $table->string('tempat_wisata');
            $table->date('tanggal');
            $table->integer('p_dewasa');
            $table->integer('p_anak');
            $table->bigInteger('harga');
            $table->bigInteger('tot_bayar');
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
        Schema::dropIfExists('tikets');
    }
};
