<?php

namespace App\Filament\Resources\Companies\RelationManagers;

use App\Filament\Resources\Responsibilities\Schemas\ResponsibilityForm;
use App\Filament\Resources\Responsibilities\Tables\ResponsibilitiesTable;
use Filament\Actions\CreateAction;
use Filament\Resources\RelationManagers\RelationManager;
use Filament\Schemas\Schema;
use Filament\Tables\Table;

class ResponsibilitiesRelationManager extends RelationManager
{
    protected static string $relationship = 'Responsibilities';

    public function form(Schema $schema): Schema
    {
        return ResponsibilityForm::configure($schema);
    }

    public function table(Table $table): Table
    {
        return ResponsibilitiesTable::configure($table)
            ->headerActions([
                CreateAction::make('create')
                    ->label('Add Responsibility')
                    ->icon('heroicon-o-plus')
                    ->modalWidth('lg'),
            ]);
    }
}
