<?php

namespace App\Filament\Resources\ToolCategories;

use App\Filament\Resources\ToolCategories\Pages\CreateToolCategory;
use App\Filament\Resources\ToolCategories\Pages\EditToolCategory;
use App\Filament\Resources\ToolCategories\Pages\ListToolCategories;
use App\Filament\Resources\ToolCategories\RelationManagers\ToolsRelationManager;
use App\Filament\Resources\ToolCategories\Schemas\ToolCategoryForm;
use App\Filament\Resources\ToolCategories\Tables\ToolCategoriesTable;
use App\Models\ToolCategory;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;
use UnitEnum;

class ToolCategoryResource extends Resource
{
    protected static ?string $model = ToolCategory::class;

    protected static ?string $navigationLabel = 'Categories';

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    protected static string|UnitEnum|null $navigationGroup = 'Uses';

    protected static ?string $recordTitleAttribute = 'name';

    public static function form(Schema $schema): Schema
    {
        return ToolCategoryForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return ToolCategoriesTable::configure($table);
    }

    public static function getRelations(): array
    {
        return [
            ToolsRelationManager::class,
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => ListToolCategories::route('/'),
            'create' => CreateToolCategory::route('/create'),
            'edit' => EditToolCategory::route('/{record}/edit'),
        ];
    }
}
