<?php

namespace App\Filament\Resources\UmkmProductDocumentationResource\Pages;

use App\Filament\Resources\UmkmProductDocumentationResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditUmkmProductDocumentation extends EditRecord
{
    protected static string $resource = UmkmProductDocumentationResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
