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
        Schema::create('kapal', function (Blueprint $table) {
            $table->id();
            $table->integer('id_user');
            $table->integer('id_wajib_retribusi')->nullable();
            $table->string('nama_kapal', 50);
            $table->integer('id_jenis_kapal');
            $table->string('ukuran', 50);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kapal');
    }
};
