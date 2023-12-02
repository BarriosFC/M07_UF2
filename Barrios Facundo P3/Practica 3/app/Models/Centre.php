<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Centre extends Model
{
    use HasFactory;

    protected $table = 'centres';

    // Se indica que los campos son fillable
    protected $fillable = [
        'name',
        'address',
        'cp',
        'city'
    ];

    protected $hidden = [];
}
