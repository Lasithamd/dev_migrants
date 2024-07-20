<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Feature extends Model
{
    use HasFactory;

    protected $fillable = [
        'sub_category_id',
        'feature1',
        'feature2',
        'feature3',
        'feature4',
        'feature5',
        'feature6',
    ];
}
