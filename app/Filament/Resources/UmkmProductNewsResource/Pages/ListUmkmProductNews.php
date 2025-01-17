<?php

namespace App\Filament\Resources\UmkmProductNewsResource\Pages;

use App\Filament\Resources\UmkmProductNewsResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListUmkmProductNews extends ListRecords
{
    protected static string $resource = UmkmProductNewsResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
