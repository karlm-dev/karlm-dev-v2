<?php

namespace App\Filament\Pages;

use App\Settings\SiteSettings;
use BackedEnum;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Pages\SettingsPage;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use UnitEnum;

class ManageSiteSettings extends SettingsPage
{
    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedCog6Tooth;

    protected static ?string $navigationLabel = 'Site Settings';

    protected static string|null|UnitEnum $navigationGroup = 'Settings';

    protected static ?int $navigationSort = 40;

    protected static string $settings = SiteSettings::class;

    public function form(Schema $schema): Schema
    {
        return $schema->components([
            Section::make('Site Settings')
                ->columnSpanFull()
                ->description('Configure the basic settings for your site.')
                ->schema([
                    TextInput::make('site_name')
                        ->required(),
                    Textarea::make('site_description')
                        ->required(),
                    Textarea::make('copyright_notice'),
                    Textarea::make('footer_text'),
            ]),
            Section::make('Current Work Details')
                ->description('Provide contact details for your site.')
                ->columnSpanFull()
                ->schema([
                    TextInput::make('current_company_name')
                        ->label('Current Company Name')
                        ->required(),
                    TextInput::make('current_company_url')
                        ->label('Current Company URL / Website')
                        ->url()
                        ->required(),
                    TextInput::make('title')
                        ->label('Current Job Title')
                        ->required(),
            ]),
            Section::make('Contact Information')
                ->description('Provide contact details for your site.')
                ->columnSpanFull()
                ->schema([
                    TextInput::make('email')
                        ->email(),
                    TextInput::make('phone')
                        ->tel(),
                    TextInput::make('address'),
            ]),
            Section::make('Social Links')
                ->description('Provide links to your social media profiles.')
                ->columnSpanFull()
                ->schema([
                    Repeater::make('links')->schema([
                        TextInput::make('label')->required(),
                        Select::make('type')->options([
                            'facebook' => 'Facebook',
                            'twitter' => 'X / Twitter',
                            'instagram' => 'Instagram',
                            'linkedin' => 'LinkedIn',
                            'youtube' => 'YouTube',
                            'github' => 'GitHub',
                        ])->required(),
                        TextInput::make('url')
                            ->url()
                            ->required(),
                    ]),
                ]),
        ]);
    }
}
