<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class transaction extends Model
{
    use HasFactory, SoftDeletes;
    protected $fillable = [
        'food_id', 'user_id', 'quantity', 'total', 'status', 'payment_url'
    ];


    public function food()
    {
        return $this->hasOne(Food::class, 'id', 'food_id');
    }
    public function user()
    {
        return $this->hasOne(Food::class, 'id', 'user_id');
    }

    public function getCreatedAttribute($value)
    {
        return Carbon::parse($value)->timestamp;
    }
    public function getUpdatedAttribute($value)
    {
        return Carbon::parse($value)->timestamp;
    }
}
