<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SubCategory extends Model
{
    use HasFactory;

    
    protected $fillable =[
        'name','category_id', 'status'
    ];

    protected $primaryKey = 'id';

    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id');
    }

    public function ads()
    {
        return $this->hasMany(Ads::class, 'sub_category_id');
    }
}

