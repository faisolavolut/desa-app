<?php

namespace App\Filament\Resources\HomepageUmkmWeekResource\Pages;

use App\Filament\Resources\HomepageUmkmWeekResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditHomepageUmkmWeek extends EditRecord
{
    protected static string $resource = HomepageUmkmWeekResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
