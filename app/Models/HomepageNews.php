<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Traits\HasImageUrl;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
use Spatie\MediaLibrary\MediaCollections\Events\MediaHasBeenAddedEvent;

class HomepageNews extends Model implements HasMedia
{
    use HasFactory, HasImageUrl, InteractsWithMedia;

    protected $table = 'homepage_news';

    protected $fillable = [
        'title',
        'description',
        'image_url',
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
        static::created(function ($product) {
            app('events')->listen(MediaHasBeenAddedEvent::class, function ($event) use ($product) {
                $model = $event->media->model;
                $relativeUrl = $event->media->getUrl();
                // Periksa apakah model yang diproses adalah yang sedang diproses
                if ($model->id === $product->id) {
                    $product->updateQuietly([
                        'image_url' => removeStoragePrefix($relativeUrl),
                    ]);
                }
            });
        });
    }
}
