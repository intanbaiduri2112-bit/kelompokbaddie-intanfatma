<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProspekPelanggan extends Model
{
    protected $fillable = [
        'nama',
        'nama_perusahaan',
        'email',
        'telepon',
        'sumber_prospek',
        'status',
        'tanggal_tindak_lanjut',
        'catatan',
    ];

    protected function casts(): array
    {
        return [
            'tanggal_tindak_lanjut' => 'date',
        ];
    }
}