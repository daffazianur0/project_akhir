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
        Schema::create('wajib_retribusi', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('no_hp');
            $table->string('nik')->unique();
            $table->string('alamat');
            $table->unsignedBigInteger('id_kelurahan');
            $table->enum('status', ['A', 'B']);
            $table->string('id_user');
            $table->timestamps();

            $table->foreign('id_kelurahan')->references('id')->on('kelurahan')->onDelete('cascade');
        });
        Schema::table('users', function (Blueprint $table) {
            $table->unsignedBigInteger('id_wajib_retribusi')->nullable();
            $table->foreign('id_wajib_retribusi')->references('id')->on('wajib_retribusi')->onDelete('cascade');
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('wajib_retribusi');
    }
};
