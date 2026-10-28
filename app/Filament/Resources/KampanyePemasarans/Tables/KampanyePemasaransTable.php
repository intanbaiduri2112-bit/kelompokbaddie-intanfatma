<?php

namespace App\Filament\Resources\KampanyePemasarans\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteAction;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class KampanyePemasaransTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('nama_kampanye')
                    ->label('Nama Kampanye')
                    ->searchable()
                    ->sortable()
                    ->weight('bold'),

                TextColumn::make('jenis_kampanye')
                    ->label('Jenis Kampanye')
                    ->badge(),

                TextColumn::make('target_audiens')
                    ->label('Target Audiens')
                    ->limit(30)
                    ->toggleable(),

                TextColumn::make('anggaran')
                    ->label('Anggaran')
                    ->numeric(decimalPlaces: 2)
                    ->prefix('Rp ')
                    ->sortable(),

                TextColumn::make('tanggal_mulai')
                    ->label('Tanggal Mulai')
                    ->date('d M Y')
                    ->sortable(),

                TextColumn::make('tanggal_selesai')
                    ->label('Tanggal Selesai')
                    ->date('d M Y')
                    ->sortable(),

                TextColumn::make('status')
                    ->label('Status')
                    ->badge()
                    ->color(fn (string $state): string => match ($state) {
                        'direncanakan' => 'gray',
                        'berjalan' => 'info',
                        'selesai' => 'success',
                        'dibatalkan' => 'danger',
                        default => 'gray',
                    })
                    ->formatStateUsing(fn (string $state): string => match ($state) {
                        'direncanakan' => 'Direncanakan',
                        'berjalan' => 'Berjalan',
                        'selesai' => 'Selesai',
                        'dibatalkan' => 'Dibatalkan',
                        default => ucfirst($state),
                    })
                    ->sortable(),
            ])
            ->defaultSort('created_at', 'desc')
            ->recordActions([
                EditAction::make()
                    ->label('Edit'),

                DeleteAction::make()
                    ->label('Hapus'),
            ])
            ->toolbarActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make()
                        ->label('Hapus yang dipilih'),
                ]),
            ]);
    }
}