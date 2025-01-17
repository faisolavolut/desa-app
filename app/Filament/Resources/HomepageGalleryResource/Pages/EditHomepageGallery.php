<?php

namespace App\Filament\Resources\HomepageGalleryResource\Pages;

use App\Filament\Resources\HomepageGalleryResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditHomepageGallery extends EditRecord
{
    protected static string $resource = HomepageGalleryResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
    protected function mutateFormDataBeforeSave(array $data): array
    {
        // Jika tidak ada gambar baru yang diupload, gunakan gambar lama
        if (empty($data['image_url'])) {
            $data['image_url'] = $this->record->getOriginal('image_url'); // Ambil path asli dari database
        } else {
            // Jika ada gambar baru, pastikan hanya path relatif yang disimpan
            $data['image_url'] = str_replace(asset('storage/') . '/', '', $data['image_url']);
        }


        return $data;
    }
}
