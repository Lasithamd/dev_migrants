<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',	'link',	'ads_id','status'
    ];

    protected $primaryKey = 'id';

    public function ads()
    {
        return $this->belongsTo(Ads::class, 'ads_id');
    }
}
