<?php

namespace App\Filament\Resources\ProspekPelanggans\Schemas;

use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class ProspekPelangganForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema->components([
            TextInput::make('nama')
                ->label('Nama Prospek')
                ->required()
                ->maxLength(255),

            TextInput::make('nama_perusahaan')
                ->label('Nama Perusahaan'),

            TextInput::make('email')
                ->email(),

            TextInput::make('telepon')
                ->tel(),

            Select::make('sumber_prospek')
                ->options([
                    'website' => 'Website',
                    'media_sosial' => 'Media Sosial',
                    'referensi' => 'Referensi',
                    'telepon' => 'Telepon',
                    'pameran' => 'Pameran',
                ])
                ->required(),

            Select::make('status')
                ->options([
                    'baru' => 'Baru',
                    'dihubungi' => 'Sudah Dihubungi',
                    'negosiasi' => 'Negosiasi',
                    'berhasil' => 'Berhasil',
                    'gagal' => 'Gagal',
                ])
                ->default('baru')
                ->required(),

            DatePicker::make('tanggal_tindak_lanjut')
                ->label('Tanggal Tindak Lanjut'),

            Textarea::make('catatan')
                ->columnSpanFull(),
        ]);
    }
}