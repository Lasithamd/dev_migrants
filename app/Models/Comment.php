<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;

    protected $fillable=[
        'ads_id',
        'comment',
        'user_id'
    ];
    protected $primaryKey = 'id';

    public function ads()
    {
        return $this->belongsTo(Ads::class, 'ads_id');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}

