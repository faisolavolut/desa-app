<?php

namespace App\Filament\Resources\HomepageNewsResource\Pages;

use App\Filament\Resources\HomepageNewsResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListHomepageNews extends ListRecords
{
    protected static string $resource = HomepageNewsResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
