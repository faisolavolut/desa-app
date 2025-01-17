<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Traits\HasImageUrl;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
use Spatie\MediaLibrary\MediaCollections\Events\MediaHasBeenAddedEvent;

class UmkmProductDocumentation extends Model implements HasMedia
{
    use HasFactory, HasImageUrl, InteractsWithMedia;
    protected $table = 'umkm_product_documentations';

    protected $fillable = [
        'product_id',
        'file_path',
        'description',
    ];

    // Relasi ke UmkmProduct
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
        // Event `saved` untuk update URL setelah media tersedia
        static::saved(function ($catalog) {
            $catalog->updateQuietly([
                'file_path' => $catalog->getFirstMediaUrl('documentation_files') ? removeStoragePrefix($catalog->getFirstMediaUrl('documentation_files')) : null,
            ]);
        });

        // Event `created` untuk media tambahan
        static::created(function ($catalog) {
            app('events')->listen(MediaHasBeenAddedEvent::class, function ($event) use ($catalog) {
                $model = $event->media->model;
                $relativeUrl = $event->media->getUrl();

                // Periksa apakah model yang diproses adalah yang sedang diproses
                if ($model->id === $catalog->id) {
                    $catalog->updateQuietly([
                        'file_path' => removeStoragePrefix($relativeUrl),
                    ]);
                }
            });
        });
    }
}
