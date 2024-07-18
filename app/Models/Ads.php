<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ads extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',    
        'price',    
        'city_id',    
        'category_id',    
        'sub_category_id',    
        'feature1',    
        'feature2',    
        'feature3',    
        'feature4',    
        'feature5',    
        'feature6',    
        'user_id',
        'condition',   
        'slug'
    ];
}
