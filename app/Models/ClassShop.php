<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ClassShop extends Model
{
    use HasFactory;
    protected $fillable = [
        'grade',
        'class',
        'program',
        'leader',
        'shop_flag',
        'remarks',
    ];
}
