<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KontenEdukatif extends Model
{
    use HasFactory;

    // Menentukan nama tabel (jika berbeda dengan plural dari nama model)
    protected $table = 'konten_edukatif';

    // Menentukan kolom mana saja yang bisa diisi (mass assignable)
    protected $fillable = [
        'id_user', 
        'judul', 
        'tipe', 
        'thumbnail', 
        'sumber', 
        'isi_artikel', 
        'link_youtube'
    ];

    // Menentukan relasi dengan model User (jika diperlukan)
    public function user()
    {
        return $this->belongsTo(User::class, 'id_user');
    }

    public function kataKunci()
    {
        return $this->hasMany(KataKunciKonten::class, 'id_konten');
    }

    // Menentukan relasi dengan model jika tipe konten adalah video atau artikel
    public function isArtikel()
    {
        return $this->tipe === 'artikel';
    }

    public function isVideo()
    {
        return $this->tipe === 'video';
    }
}
