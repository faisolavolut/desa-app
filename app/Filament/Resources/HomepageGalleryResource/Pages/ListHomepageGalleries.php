<?php

namespace App\Filament\Resources\HomepageGalleryResource\Pages;

use App\Filament\Resources\HomepageGalleryResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListHomepageGalleries extends ListRecords
{
    protected static string $resource = HomepageGalleryResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
