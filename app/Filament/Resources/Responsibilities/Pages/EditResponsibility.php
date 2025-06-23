<?php

namespace App\Filament\Resources\Responsibilities\Pages;

use App\Filament\Resources\Responsibilities\ResponsibilityResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditResponsibility extends EditRecord
{
    protected static string $resource = ResponsibilityResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
