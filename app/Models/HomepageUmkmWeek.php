<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HomepageUmkmWeek extends Model
{
    use HasFactory;

    protected $table = 'homepage_umkm_week';

    protected $fillable = [
        'title',
        'description',
        'position',
    ];
}
