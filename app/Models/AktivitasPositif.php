<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AktivitasPositif extends Model
{
    use HasFactory;

    protected $table = 'aktivitas_positif';

    // Tentukan kolom yang boleh diisi (fillable)
    protected $fillable = ['nama', 'gambar'];

    // Definisikan hubungan one-to-many dengan KataKunciAktivitasPositif
    public function kataKunci()
    {
        return $this->hasMany(KataKunciAktivitasPositif::class, 'id_aktivitas');
    }
        
    public $timestamps = false;
}
