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
        Schema::create('telepons', function (Blueprint $table) {
            $table->id();
            $table->string('nomor_telepon');
            $table->unsignedBigInteger('pengguna_id');
            $table->timestamps();

        
            $table->foreign('pengguna_id')
                ->references('id')
                ->on('penggunas')
                ->onDelete('cascade');
        });
        Schema::table('penggunas', function (Blueprint $table) {
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
        Schema::table('telepons', function (Blueprint $table) {
            $table->dropForeign(['pengguna_id']);
        });

        Schema::dropIfExists('telepons');
    }
};

