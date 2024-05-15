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
        Schema::create('produks', function (Blueprint $table) {
            $table->id();
            $table->string('nama_produk');
            $table->integer('jumlah');
            $table->date('tanggal_produksi');
            $table->unsignedBigInteger('id_merek');
            $table->timestamps();

            $table->foreign('id_merek')
                ->references('id')
                ->on('mereks')
                ->onDelete('cascade');
        });

        Schema::table('mereks', function (Blueprint $table) {
            $table->index('id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('produks', function (Blueprint $table) {
            $table->dropForeign(['id_merek']);
        });

        Schema::dropIfExists('produks');

        Schema::table('mereks', function (Blueprint $table) {
            $table->dropIndex(['id']);
        });
    }
};
