<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Traits\HasImageUrl;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class HomepageHeroSection extends Model implements HasMedia
{
    use HasFactory, InteractsWithMedia, HasImageUrl;

    protected $table = 'homepage_hero_sections';

    protected $fillable = [
        'title',
        'description',
        'background_image',
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
            $product->background_image = $product->getFirstMediaUrl('img') ?: null;
        });
    }
}
