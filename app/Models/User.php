<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;


class User extends Authenticatable
{
    use HasFactory, Notifiable;

    protected $table = 'user';
    
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'role',
        'email',
        'password',
        'nama',
        'jenis_kelamin',
        'tanggal_lahir',
        'foto_profil',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array{
        return [
            'password' => 'hashed',
        ];
    }

    public function isPremium()
    {
        // Cek langganan aktif
        $activeSubscription = DB::table('subscriptions')
            ->where('id_user', $this->id) // ID pengguna ini
            ->where('ends_at', '>=', Carbon::now()) // Masih dalam masa berlaku
            ->exists();

        return $activeSubscription;
    }
    
    public function admin()
    {
        return $this->hasOne(Admin::class, 'id_user');
    }

    public function tenagaAhli()
    {
        return $this->hasOne(TenagaAhli::class, 'id_user');
    }

    public function pasien()
    {
        return $this->hasOne(Pasien::class, 'id_user');
    }

    public function konten()
    {
        return $this->hasMany(KontenEdukatif::class, 'id_user');
    }
}
