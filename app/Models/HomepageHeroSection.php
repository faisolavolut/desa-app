<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Traits\HasImageUrl;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
use Spatie\MediaLibrary\MediaCollections\Events\MediaHasBeenAddedEvent;

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
        $this->addMediaCollection('product_photos') // Gunakan nama koleksi konsisten
            ->useDisk('public') // Disk public
            ->singleFile(); // Batasi satu file
    }
    protected static function booted()
    {
        // Event `saved` untuk update URL setelah media tersedia
        static::saved(function ($product) {
            $product->updateQuietly([
                'background_image' => $product->getFirstMediaUrl('background_image') ? removeStoragePrefix($product->getFirstMediaUrl('background_image')) : null,
            ]);
        });

        // Event `created` untuk media tambahan (opsional)
        static::created(function ($product) {
            app('events')->listen(MediaHasBeenAddedEvent::class, function ($event) use ($product) {
                $model = $event->media->model;
                $relativeUrl = $event->media->getUrl();

                // Periksa apakah model yang diproses adalah yang sedang diproses
                if ($model->id === $product->id) {
                    $product->updateQuietly([
                        'background_image' => removeStoragePrefix($relativeUrl),
                    ]);
                }
            });
        });
    }
}
