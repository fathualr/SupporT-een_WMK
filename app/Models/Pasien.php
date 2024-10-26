<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pasien extends Model
{
    use HasFactory;

    // Tentukan tabel yang digunakan oleh model ini
    protected $table = 'pasien';

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'id_user',
        'deskripsi_diri',
    ];

    /**
     * Define relationship to the User model.
     * Setiap pasien berhubungan dengan satu pengguna (User).
     */
    public function user()
    {
        return $this->belongsTo(User::class, 'id_user');
    }
    
    public $timestamps = false;
}
