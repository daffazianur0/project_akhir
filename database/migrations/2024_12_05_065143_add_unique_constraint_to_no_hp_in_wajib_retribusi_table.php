<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddUniqueConstraintToNoHpInWajibRetribusiTable extends Migration
{
    public function up()
    {
        Schema::table('wajib_retribusi', function (Blueprint $table) {
            $table->unique('no_hp'); // Menambahkan constraint UNIQUE
        });
    }

    public function down()
    {
        Schema::table('wajib_retribusi', function (Blueprint $table) {
            $table->dropUnique(['no_hp']); // Menghapus constraint UNIQUE
        });
    }
}
