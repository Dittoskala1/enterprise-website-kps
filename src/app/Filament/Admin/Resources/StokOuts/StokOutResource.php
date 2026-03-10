<?php

declare(strict_types=1);

namespace App\Filament\Admin\Resources\StokOuts;

use App\Filament\Admin\Resources\StokOuts\Pages\CreateStokOut;
use App\Filament\Admin\Resources\StokOuts\Pages\EditStokOut;
use App\Filament\Admin\Resources\StokOuts\Pages\ListStokOuts;
use App\Filament\Admin\Resources\StokOuts\Schemas\StokOutForm;
use App\Filament\Admin\Resources\StokOuts\Tables\StokOutsTable;
use App\Models\StokOut;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

final class StokOutResource extends Resource
{
    protected static ?string $model = StokOut::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    public static function form(Schema $schema): Schema
    {
        return StokOutForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return StokOutsTable::configure($table);
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
            'index' => ListStokOuts::route('/'),
            'create' => CreateStokOut::route('/create'),
            'edit' => EditStokOut::route('/{record}/edit'),
        ];
    }
}
