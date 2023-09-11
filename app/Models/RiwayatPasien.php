<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class RiwayatPasien extends Model
{
    use HasFactory;

    protected $fillable = [
        'data_pasien_id', 'data_penyakit_id'
    ];

    public function dataPenyakit()
    {
        return $this->belongsTo(DataPenyakit::class);
    }

    public function dataPasien()
    {
        return $this->belongsTo(DataPasien::class);
    }

    public function getDataRiwayat()
    {
        return $this->all('id', 'data_pasien_id', 'data_penyakit_id');
    }

    public function createDataRiwayat($data)
    {
        return $this->create([
            'data_pasien_id' => $data['data_pasien_id'],
            'data_penyakit_id' => $data['data_penyakit_id'],
        ]);
    }
}
