<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PercakapanChatbot extends Model
{
    use HasFactory;

    protected $table = 'percakapan_chatbot';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id_pasien',
        'label',
        'last_activity',
        'status',
    ];

    /**
     * Relationship: One PercakapanChatbot has many PesanChatbot.
     */
    public function pesanChatbot()
    {
        return $this->hasMany(PesanChatbot::class, 'id_percakapan_chatbot');
    }

    /**
     * Relationship: PercakapanChatbot belongs to Pasien.
     */
    public function pasien()
    {
        return $this->belongsTo(Pasien::class, 'id_pasien');
    }
}
