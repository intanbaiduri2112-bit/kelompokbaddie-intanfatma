<?php

namespace App\Filament\Resources\KampanyePemasarans\Schemas;

use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class KampanyePemasaranForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema->components([
            TextInput::make('nama_kampanye')
                ->label('Nama Kampanye')
                ->required()
                ->maxLength(255)
                ->placeholder('Contoh: Promosi Produk Akhir Tahun'),

            Select::make('jenis_kampanye')
                ->label('Jenis Kampanye')
                ->options([
                    'media_sosial' => 'Media Sosial',
                    'email_marketing' => 'Email Marketing',
                    'iklan_digital' => 'Iklan Digital',
                    'event' => 'Event atau Pameran',
                    'lainnya' => 'Lainnya',
                ])
                ->searchable()
                ->required(),

            Textarea::make('target_audiens')
                ->label('Target Audiens')
                ->placeholder('Contoh: UMKM dan perusahaan kecil')
                ->rows(3),

            TextInput::make('anggaran')
                ->label('Anggaran (Rp)')
                ->numeric()
                ->prefix('Rp')
                ->default(0)
                ->required()
                ->minValue(0),

            DatePicker::make('tanggal_mulai')
                ->label('Tanggal Mulai')
                ->required()
                ->native(false),

            DatePicker::make('tanggal_selesai')
                ->label('Tanggal Selesai')
                ->required()
                ->native(false)
                ->afterOrEqual('tanggal_mulai'),

            Select::make('status')
                ->label('Status Kampanye')
                ->options([
                    'direncanakan' => 'Direncanakan',
                    'berjalan' => 'Berjalan',
                    'selesai' => 'Selesai',
                    'dibatalkan' => 'Dibatalkan',
                ])
                ->default('direncanakan')
                ->required(),

            Textarea::make('deskripsi')
                ->label('Deskripsi Kampanye')
                ->rows(4)
                ->columnSpanFull(),
        ]);
    }
}