<?php

namespace App\Filament\Resources\ProspekPelanggans\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteAction;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class ProspekPelanggansTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('nama')
                    ->label('Nama Prospek')
                    ->searchable()
                    ->sortable(),

                TextColumn::make('nama_perusahaan')
                    ->label('Nama Perusahaan')
                    ->searchable(),

                TextColumn::make('email')
                    ->searchable(),

                TextColumn::make('telepon')
                    ->label('Telepon'),

                TextColumn::make('sumber_prospek')
                    ->label('Sumber')
                    ->badge()
                    ->sortable(),

                TextColumn::make('status')
                    ->badge()
                    ->sortable(),

                TextColumn::make('tanggal_tindak_lanjut')
                    ->label('Tindak Lanjut')
                    ->date('d M Y')
                    ->sortable(),

                TextColumn::make('created_at')
                    ->label('Dibuat')
                    ->dateTime('d M Y H:i')
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->defaultSort('created_at', 'desc')
            ->recordActions([
                EditAction::make(),
                DeleteAction::make(),
            ])
            ->toolbarActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
                ]),
            ]);
    }
}