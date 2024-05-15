<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTransaksisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transaksis', function (Blueprint $table) {
            $table->id();
            $table->integer('jumlah');
            $table->date('tanggal');
            $table->unsignedBigInteger('id_baranglagi');
            $table->unsignedBigInteger('id_pembeli');
            $table->timestamps();

            $table->foreign('id_baranglagi')->references('id')->on('baranglagis')->onDelete('cascade');
            $table->foreign('id_pembeli')->references('id')->on('pembelis')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('transaksis');
    }
}
