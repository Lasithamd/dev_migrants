<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Province extends Model
{
    use HasFactory;

    protected $fillable =[
        'name_en',
        'name_si',
        'name_ta'
    ];

    protected $primaryKey = 'id';

    public function district()
    {
        return $this->hasMany(District::class, 'district_id');
    }
}
