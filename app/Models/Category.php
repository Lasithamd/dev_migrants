<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $fillable =[
        'name','image', 'status'
    ];
    protected $primaryKey = 'id';

    public function subCategories()
    {
        return $this->hasMany(SubCategory::class, 'category_id');
    }

    public function ads()
    {
        return $this->hasMany(Ads::class, 'category_id');
    }
}

