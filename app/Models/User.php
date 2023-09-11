<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'nama',
        'email',
        'password',
        'alamat',
        'telepon'
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];

    public function riwayatPengguna()
    {
        return $this->hasMany(RiwayatPengguna::class);
    }

    public function getPengguna()
    {
        return $this->all('id','nama', 'email', 'password', 'alamat', 'telepon', 'role')->where('role','<>','admin');

    }
    

    public function findPengguna($id)
    {
        return $this->find($id);
    }

    public function createPengguna($data)
    {
        return $this->create([
            'nama' => $data['nama'],
            'email' => $data['email'],
            'password' => $data['password'],
            'alamat' => $data['alamat'],
            'telepon' => $data['telepon'],
        ]);
    }

    public function updatePengguna($data)
    {
        if (isset($data['password']) && !empty($data['password'])) {
            $password = $data['password'];
            return $this->update([
                'nama' => $data['nama'],
                'email' => $data['email'],
                'password' => $password,
                'alamat' => $data['alamat'],
                'telepon' => $data['telepon'],
            ]);
        }else{
            return $this->update([
                'nama' => $data['nama'],
                'email' => $data['email'],
                'alamat' => $data['alamat'],
                'telepon' => $data['telepon'],
            ]);
        }
        
    }

    public function deletePengguna($id)
    {
        $this->find($id)->delete();
    }

    public function isAdmin(){
        return $this->role === 'admin';
    }
}
