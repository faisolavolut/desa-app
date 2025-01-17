<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Traits\HasImageUrl;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class HomepageGallery extends Model implements HasMedia
{
    use HasFactory, InteractsWithMedia, HasImageUrl;

    protected $table = 'homepage_galleries'; // Nama tabel di database

    protected $fillable = [
        'title',
        'description',
        'image_url',
    ];
    
    public function registerMediaCollections(): void
    {
        $this->addMediaCollection('image_url')
            ->useDisk('public')
            ->singleFile();
    }
    protected static function booted()
    {
        static::saving(function ($product) {
            $product->image_url = $product->getFirstMediaUrl('image_url') ?: null;
        });
    }
}
