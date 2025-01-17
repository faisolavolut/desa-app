<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Traits\HasImageUrl;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
use Spatie\MediaLibrary\MediaCollections\Events\MediaHasBeenAddedEvent;


class UmkmProductNews extends Model implements HasMedia
{
    use HasFactory, HasImageUrl, InteractsWithMedia;

    protected $table = 'umkm_product_news';

    protected $fillable = [
        'product_id',
        'news_title',
        'news_content',
        'news_photo',
        'published_at',
    ];
    public function registerMediaCollections(): void
    {
        $this->addMediaCollection('news_photo') // Nama koleksi
            ->useDisk('public') // Gunakan disk public
            ->singleFile(); // Batasi satu file per koleksi
    }

    public function product()
    {
        return $this->belongsTo(UmkmProduct::class, 'product_id');
    }
    public function scopeForUser($query, $user)
    {
        if ($user->roles === 'UMKM') {
            // UMKM melihat data yang terkait dengan product yang mereka miliki
            return $query->whereHas('product', function ($q) use ($user) {
                $q->where('user_id', $user->id);
            });
        }
        return $query;
    }
    protected static function booted()
    {
        static::saved(function ($news) {
            $news->updateQuietly([
                'news_photo' => $news->getFirstMediaUrl('news_photo') ? removeStoragePrefix($news->getFirstMediaUrl('news_photo')) : null,
            ]);
        });

        static::created(function ($news) {
            app('events')->listen(MediaHasBeenAddedEvent::class, function ($event) use ($news) {
                $model = $event->media->model;
                $relativeUrl = $event->media->getUrl();

                // Periksa apakah model yang diproses adalah yang sedang diproses
                if ($model->id === $news->id) {
                    $news->updateQuietly([
                        'news_photo' => removeStoragePrefix($relativeUrl),
                    ]);
                }
            });
        });
    }
}
