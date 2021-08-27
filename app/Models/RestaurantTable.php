<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RestaurantTable extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    protected $fillable = ['restaurant_id'];

    public function restaurant() {
        return $this->belongsTo(Restaurant::class);
    }

    public function orders() {
        return $this->hasMany(Order::class);
    }
}
