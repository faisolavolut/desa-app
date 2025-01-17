<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SupportInvestor extends Model
{
    use HasFactory;

    protected $table = 'supports';
    protected $fillable = ['user_id', 'product_id', 'quantity', 'total'];
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
}
