<?php

namespace App\Filament\Resources\HomepageContactResource\Pages;

use App\Filament\Resources\HomepageContactResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListHomepageContacts extends ListRecords
{
    protected static string $resource = HomepageContactResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
