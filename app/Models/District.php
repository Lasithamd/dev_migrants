<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class District extends Model
{
    use HasFactory;

    protected $fillable = ['name_en', 'name_si' ,'name_ta','province_id'];
    
    protected $primaryKey = 'id';
    public function cities()
    {
        return $this->hasMany(City::class, 'city_id');
    }

    public function provinces()
    {
        return $this->belongsTo(Province::class, 'province_id');
    }
}
