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
        Schema::create('transactions', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('jenis_sampah_id');
            $table->decimal('jumlah_sampah', 10, 2);
            $table->string('status');
            $table->decimal('harga', 10, 2);
            $table->integer('lama_penyimpanan'); // Kolom "lama_penyimpanan"
            $table->foreign('jenis_sampah_id')->references('id')->on('jenis_sampah');
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
        Schema::dropIfExists('transaction');
    }
};
