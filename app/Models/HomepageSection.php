<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Traits\HasImageUrl;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class HomepageSection extends Model implements HasMedia
{
    use HasFactory, HasImageUrl, InteractsWithMedia;

    protected $table = 'homepage_sections';

    protected $fillable = [
        'profile_kelurahan',
        'profile_umkm',
        'program_csr',
        'image_url'
    ];
    
    public function registerMediaCollections(): void
    {
        $this->addMediaCollection('img')
            ->useDisk('public')
            ->singleFile();
    }
    protected static function booted()
    {
        static::saving(function ($product) {
            $product->image_url = $product->getFirstMediaUrl('img') ?: null;
        });
    }
}
