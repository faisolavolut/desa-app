<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Traits\HasImageUrl;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
use Spatie\MediaLibrary\MediaCollections\Events\MediaHasBeenAddedEvent;

class UmkmProduct extends Model implements HasMedia
{
    use HasFactory, HasImageUrl, InteractsWithMedia;

    protected $table = 'umkm_products';

    protected $fillable = [
        'product_name',
        'product_title',
        'short_description',
        'address',
        'contact',
        'product_photo',
        'umkm_profile',
        'facilities',
        'rab',
        'user_id'
    ];
    public function catalogs()
    {
        return $this->hasMany(UmkmProductCatalog::class, 'product_id');
    }
    public function documentations()
    {
        return $this->hasMany(UmkmProductDocumentation::class, 'product_id');
    }
    public function news()
    {
        return $this->hasMany(UmkmProductNews::class, 'product_id');
    }
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
    public function scopeForUser($query, $user)
    {
        if ($user->roles === 'UMKM') {
            // Investor melihat data yang terkait dengan user_id mereka
            return $query->where('user_id', $user->id);
        }
        return $query;
    }
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
                'product_photo' => $product->getFirstMediaUrl('product_photos') ? removeStoragePrefix($product->getFirstMediaUrl('product_photos')) : null,
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
                        'product_photo' => removeStoragePrefix($relativeUrl),
                    ]);
                }
            });
        });
    }
}
