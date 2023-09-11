<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DataPenyakit extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama', 'solusi', 'lokasi_tubuh'
    ];

    public function riwayatPasien()
    {
        return $this->hasMany(RiwayatPasien::class);
    }

    public function getDataPenyakit()
    {
        return $this->all('id', 'nama', 'solusi', 'lokasi_tubuh');
    }

    public function createDataPenyakit($data)
    {
        return $this->create([
            'nama' => $data['nama'],
            'solusi' => $data['solusi'],
            'lokasi_tubuh' => $data['lokasi_tubuh'],
        ]);
    }

    public function updateDataPenyakit($data)
    {
        return $this->update([
            'nama' => $data['nama'],
            'solusi' => $data['solusi'],
            'lokasi_tubuh' => $data['lokasi_tubuh'],
        ]);
    }

    public function deleteDataPenyakit($id)
    {
        $this->find($id)->delete();
    }
}
