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

    protected $primaryKey = 'id';
    public function city()
    {
        return $this->belongsTo(City::class, 'city_id');
    }

    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id');
    }

    public function subCategory()
    {
        return $this->belongsTo(SubCategory::class, 'sub_category_id');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
