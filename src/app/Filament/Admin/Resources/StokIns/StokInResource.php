<?php

declare(strict_types=1);

namespace App\Filament\Admin\Resources\StokIns;

use App\Filament\Admin\Resources\StokIns\Pages\CreateStokIn;
use App\Filament\Admin\Resources\StokIns\Pages\EditStokIn;
use App\Filament\Admin\Resources\StokIns\Pages\ListStokIns;
use App\Filament\Admin\Resources\StokIns\Schemas\StokInForm;
use App\Filament\Admin\Resources\StokIns\Tables\StokInsTable;
use App\Models\StokIn;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

final class StokInResource extends Resource
{
    protected static ?string $model = StokIn::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    public static function form(Schema $schema): Schema
    {
        return StokInForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return StokInsTable::configure($table);
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
            'index' => ListStokIns::route('/'),
            'create' => CreateStokIn::route('/create'),
            'edit' => EditStokIn::route('/{record}/edit'),
        ];
    }
}
