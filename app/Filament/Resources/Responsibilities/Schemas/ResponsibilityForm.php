<?php

namespace App\Filament\Resources\Responsibilities\Schemas;

use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class ResponsibilityForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema->components([
            Select::make('company_id')
                ->relationship('company', 'name')
                ->label('Company')
                ->searchable()
                ->columnSpanFull()
                ->preload()
                ->createOptionForm([
                    TextInput::make('name')
                        ->required(),
                    TextInput::make('title')
                        ->required(),
                ]),
            Textarea::make('description')
                ->columnSpanFull()
                ->required(),
            TextInput::make('sort_order')
                ->required()
                ->numeric()
                ->columnSpanFull()
                ->default(0),
        ]);
    }
}
