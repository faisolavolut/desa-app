<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Support extends Model
{
    use HasFactory;

    protected $table = 'supports';
    protected $fillable = ['user_id', 'product_id', 'quantity', 'total', 'notes'];
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    /**
     * Relasi ke model UmkmProduct.
     * Support berhubungan dengan satu produk.
     */
    public function product()
    {
        return $this->belongsTo(UmkmProduct::class, 'product_id');
    }

    public function scopeForUser($query, $user)
    {
        if ($user->roles === 'ADMIN') {
            // Admin melihat semua data
            return $query;
        } elseif ($user->roles === 'INVESTOR') {
            // Investor melihat data yang terkait dengan user_id mereka
            return $query->where('user_id', $user->id);
        } elseif ($user->roles === 'UMKM') {
            // UMKM melihat data yang terkait dengan product yang mereka miliki
            return $query->whereHas('product', function ($q) use ($user) {
                $q->where('user_id', $user->id);
            });
        }
        return $query;
    }
}
