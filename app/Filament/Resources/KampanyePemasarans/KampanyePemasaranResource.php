<?php

namespace App\Filament\Resources\KampanyePemasarans;

use App\Filament\Resources\KampanyePemasarans\Pages\CreateKampanyePemasaran;
use App\Filament\Resources\KampanyePemasarans\Pages\EditKampanyePemasaran;
use App\Filament\Resources\KampanyePemasarans\Pages\ListKampanyePemasarans;
use App\Filament\Resources\KampanyePemasarans\Schemas\KampanyePemasaranForm;
use App\Filament\Resources\KampanyePemasarans\Tables\KampanyePemasaransTable;
use App\Models\KampanyePemasaran;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class KampanyePemasaranResource extends Resource
{
    protected static ?string $model = KampanyePemasaran::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    protected static ?string $recordTitleAttribute = 'nama_kampanye';

    public static function form(Schema $schema): Schema
    {
        return KampanyePemasaranForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return KampanyePemasaransTable::configure($table);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index'  => ListKampanyePemasarans::route('/'),
            'create' => CreateKampanyePemasaran::route('/create'),
            'edit'   => EditKampanyePemasaran::route('/{record}/edit'),
        ];
    }
}