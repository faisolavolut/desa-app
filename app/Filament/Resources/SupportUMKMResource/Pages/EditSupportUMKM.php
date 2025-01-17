<?php

namespace App\Filament\Resources\SupportUMKMResource\Pages;

use App\Filament\Resources\SupportUMKMResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditSupportUMKM extends EditRecord
{
    protected static string $resource = SupportUMKMResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
