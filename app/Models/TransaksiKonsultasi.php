<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TransaksiKonsultasi extends Model
{
    use HasFactory;

    // Nama tabel (opsional jika nama tabel sesuai dengan konvensi Laravel)
    protected $table = 'transaksi_konsultasi';

    // Primary key (opsional jika nama primary key adalah 'id')
    protected $primaryKey = 'id';

    // Kolom yang dapat diisi (fillable) secara mass-assignment
    protected $fillable = [
        'id_konsultasi',
        'snap_token',
        'amount',
        'payment_method',
        'status',
        'expired_at',
    ];

    protected $casts = [
        'expired_at' => 'datetime',
    ];

    /**
     * Relasi ke model Konsultasi
     * Setiap transaksi konsultasi merujuk pada satu konsultasi.
     */
    public function konsultasi()
    {
        return $this->belongsTo(Konsultasi::class, 'id_konsultasi');
    }
}
