<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class wajibRetribusi extends Model
{
    use HasFactory;
    protected $table = 'wajib_retribusi';

    protected $fillable = [
        'id_user',
        'nama',
        'no_hp',
        'nik',
        'alamat',
        'kelurahan',
    ];


    public function user()
    {
        return $this->belongsTo(User::class, 'id_user');
}
}
