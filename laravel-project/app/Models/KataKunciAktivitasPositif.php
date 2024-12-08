<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KataKunciAktivitasPositif extends Model
{
    use HasFactory;

    protected $table = 'kata_kunci_aktivitas_positif';

    // Tentukan kolom yang boleh diisi (fillable)
    protected $fillable = ['id_aktivitas', 'nama'];

    // Definisikan hubungan many-to-one dengan AktivitasPositif
    public function aktivitas()
    {
        return $this->belongsTo(AktivitasPositif::class, 'id_aktivitas');
    }
        
    public $timestamps = false;
}
