<?php
namespace App\Traits;

trait HasImageUrl
{
    // Accessor untuk URL lengkap gambar
    public function getImageUrlAttribute($value)
    {
        return $value ? asset('storage/' . $value) : null; // URL lengkap untuk gambar
    }

    // Mutator untuk menyimpan hanya path relatif
    public function setImageUrlAttribute($value)
    {
        $this->attributes['image_url'] = str_replace(asset('storage') . '/', '', $value);
    }
}