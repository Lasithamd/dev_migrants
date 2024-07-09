<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    use HasFactory;
    protected $fillable = ['name_en', 'name_si','district_id','postcode'];
    // protected $fill
    protected $primaryKey = 'city_id';
}
