<?php

namespace App\Filament\Resources\Companies\Schemas;

use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class CompanyForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema->components([
            TextInput::make('name')
                ->label('Company Name')
                ->required()
                ->maxLength(255)
                ->unique(),

            TextInput::make('title')
                ->label('Job Title')
                ->nullable()
                ->maxLength(255),

            DatePicker::make('start_date')
                ->format('d/m/Y'),

            DatePicker::make('end_date')
                ->format('d/m/Y')
                ->nullable()
                ->label('End Date (if applicable)')
                ->helperText('Leave empty if currently employed'),

            TextInput::make('website')
                ->label('Company Website')
                ->nullable()
                ->maxLength(255)
                ->url()
                ->placeholder('https://example.com'),
        ]);
    }
}
