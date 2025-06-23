<?php

namespace App\Filament\Resources\Responsibilities\Pages;

use App\Filament\Resources\Responsibilities\ResponsibilityResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListResponsibilities extends ListRecords
{
    protected static string $resource = ResponsibilityResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
