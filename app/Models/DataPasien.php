<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DataPasien extends Model
{
    use HasFactory;

    protected $fillable = [
        'username','nama', 'umur', 'alamat', 'telepon','kelamin'
    ];

    public function riwayatPasien()
    {
        return $this->hasMany(RiwayatPasien::class);
    }

    public function getDataPasien()
    {
        return $this->orderBy('created_at', 'desc')->get(['id', 'username', 'nama', 'umur', 'alamat', 'telepon', 'kelamin']);
    }


    public function findDataPasien($id)
    {
        return $this->find($id);
    }

    public function createDataPasien($data)
    {
        return $this->create([
            'username' => date('ymdhis', time()),
            'nama' => $data['nama'],
            'umur' => $data['umur'],
            'alamat' => $data['alamat'],
            'telepon' => $data['telepon'],
            'kelamin' => $data['kelamin'],
        ]);
    }

    public function updateDataPasien($data)
    {
        return $this->update([
            'nama' => $data['nama'],
            'umur' => $data['umur'],
            'alamat' => $data['alamat'],
            'telepon' => $data['telepon'],
            'kelamin' => $data['kelamin'],
        ]);
    }

    public function deleteDataPasien($id)
    {
        $this->find($id)->delete();
    }
}
