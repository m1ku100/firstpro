<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateKosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nama');
            $table->text('alamat');
            $table->string('kota');
            $table->string('pemilik_kos');
            $table->string('no_pemilik');
            $table->text('deskripsi');
            $table->integer('jumlah_kamar_kos');
            $table->integer('jumlah_kamar_terisi');
            $table->string('jenis');
            $table->string('gambar');
            $table->string('gambar2');
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
        Schema::dropIfExists('kos');
    }
}
