<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('penjualans', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('product_id');
            $table->unsignedBigInteger('pelanggan_id');
            $table->integer('jumlah');
            $table->integer('total_harga');
            $table->date('tanggal_penjualan');
            $table->timestamps();

            // Foreign key constraints
            $table->foreign('product_id')->references('id')->on('products')->onDelete('cascade');
            $table->foreign('pelanggan_id')->references('id')->on('pelanggans')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('penjualans');
    }
};
