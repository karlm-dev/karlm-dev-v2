<?php

namespace App\Filament\Resources\Responsibilities;

use App\Filament\Resources\Responsibilities\Pages\CreateResponsibility;
use App\Filament\Resources\Responsibilities\Pages\EditResponsibility;
use App\Filament\Resources\Responsibilities\Pages\ListResponsibilities;
use App\Filament\Resources\Responsibilities\Schemas\ResponsibilityForm;
use App\Filament\Resources\Responsibilities\Tables\ResponsibilitiesTable;
use App\Models\Responsibility;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;
use UnitEnum;

class ResponsibilityResource extends Resource
{
    protected static ?string $model = Responsibility::class;

    protected static string|UnitEnum|null $navigationGroup = 'Resume';

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    public static function form(Schema $schema): Schema
    {
        return ResponsibilityForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return ResponsibilitiesTable::configure($table);
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
            'index' => ListResponsibilities::route('/'),
            'create' => CreateResponsibility::route('/create'),
            'edit' => EditResponsibility::route('/{record}/edit'),
        ];
    }
}
