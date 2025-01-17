<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HomepageContact extends Model
{
    
    use HasFactory;

    protected $table = 'homepage_contacts'; // Nama tabel di database

    protected $fillable = [
        'title',
        'description',
        'email',
        'phone',
        'address',
    ];
}
