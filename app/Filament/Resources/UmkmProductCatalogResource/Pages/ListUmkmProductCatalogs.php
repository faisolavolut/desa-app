<?php

namespace App\Filament\Resources\UmkmProductCatalogResource\Pages;

use App\Filament\Resources\UmkmProductCatalogResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListUmkmProductCatalogs extends ListRecords
{
    protected static string $resource = UmkmProductCatalogResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
