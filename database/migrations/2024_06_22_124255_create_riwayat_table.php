<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('riwayat', function (Blueprint $table) {
            $table->id();
            $table->foreign('kamar_id')->references(columns: 'id')->on(table:'kamar');
            $table->unsignedBigInteger('kamar_id');
            $table->foreign('pasien_id')->references(columns: 'id')->on(table:'pasien');
            $table->unsignedBigInteger('pasien_id');
            $table->foreign('riwayat_id')->references(columns: 'id')->on(table:'riwayat');
            $table->unsignedBigInteger('riwayat_id');
            
            $table->date('chech_in_date')->nullable();
            $table->date('check_out_date')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('riwayat');
    }
};
