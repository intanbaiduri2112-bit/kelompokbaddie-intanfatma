<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class KampanyePemasaran extends Model
{
    protected $fillable = [
        'nama_kampanye',
        'jenis_kampanye',
        'target_audiens',
        'anggaran',
        'tanggal_mulai',
        'tanggal_selesai',
        'status',
        'deskripsi',
    ];

    protected function casts(): array
    {
        return [
            'anggaran' => 'decimal:2',
            'tanggal_mulai' => 'date',
            'tanggal_selesai' => 'date',
        ];
    }
}