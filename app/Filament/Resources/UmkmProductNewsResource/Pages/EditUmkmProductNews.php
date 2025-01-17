<?php

namespace App\Filament\Resources\UmkmProductNewsResource\Pages;

use App\Filament\Resources\UmkmProductNewsResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditUmkmProductNews extends EditRecord
{
    protected static string $resource = UmkmProductNewsResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
