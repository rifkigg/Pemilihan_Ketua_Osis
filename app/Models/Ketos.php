<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ketos extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'image',
        'visi',
        'misi',
        'no',
    ];
}
