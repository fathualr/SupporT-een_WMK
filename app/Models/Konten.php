<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Konten extends Model
{
    protected $table = 'konten_edukatif';

    protected $fillable = [
        'id_user',
        'judul',
        'tipe',
        'thumbnail',
        'sumber',
        'isi_artikel',
        'link_youtube',
    ];

    public function user(){
        return $this->belongsTo(User::class, 'id_user');
    }
}
