<?php

namespace App\Filament\Resources\Tools\Schemas;

use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class ToolForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('name')
                    ->required()
                    ->maxLength(255),
                TextInput::make('url')
                    ->url()
                    ->maxLength(255),
                Select::make('category_id')
                    ->relationship('category', 'name')
                    ->preload()
                    ->searchable()
                    ->required()
                    ->label('Category'),
            ]);
    }
}
