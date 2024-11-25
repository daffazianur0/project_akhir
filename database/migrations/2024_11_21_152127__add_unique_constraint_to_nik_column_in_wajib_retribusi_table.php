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
        Schema::table('wajib_retribusi', function (Blueprint $table) {
            // Menambahkan constraint UNIQUE pada kolom nik
            $table->unique('nik');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('wajib_retribusi', function (Blueprint $table) {
            // Menghapus constraint UNIQUE pada kolom nik
            $table->dropUnique(['nik']);
        });
    }
};
