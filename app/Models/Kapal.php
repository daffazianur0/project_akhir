<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kapal extends Model
{
    use HasFactory;

    protected $table = 'kapal';
    protected $fillable = ['id_user', 'id_wajib_retribusi', 'nama_kapal', 'id_jenis_kapal', 'ukuran','konfirmasi_bayar_id'];



    public function jenisKapal()
    {
        return $this->belongsTo(RefjenisKapal::class, 'id_jenis_kapal');
    }
    public function user()
    {
        return $this->belongsTo(User::class, 'id_user');
    }
    public function Konfirmasibayar()
    {
        return $this->belongsTo(Konfirmasibayar::class, 'konfirmasi_bayar_id');
    }


}
