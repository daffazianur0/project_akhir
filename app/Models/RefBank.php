<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RefBank extends Model
{
    protected $tabel = "ms_rekening";
    protected $fillabel = ['id_ref_bank','nama_akun','no_rekening'];
    public function refBank()
    {
     return $this->belongsTo(RefBank::class,'id_ref_bank');
    }
}
