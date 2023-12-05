<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Professorat extends Model
{
    use HasFactory;

    protected $table = 'professorat';

    // Se indica que los campos son fillable
    protected $fillable = [
        'name',
        'surname',
        'email'
    ];

    protected $hidden = [];
}
