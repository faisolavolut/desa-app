<?php

namespace App\Filament\Resources\UmkmProductCatalogResource\Pages;

use App\Filament\Resources\UmkmProductCatalogResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditUmkmProductCatalog extends EditRecord
{
    protected static string $resource = UmkmProductCatalogResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
