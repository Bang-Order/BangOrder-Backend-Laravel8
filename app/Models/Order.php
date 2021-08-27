<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    protected $fillable = ['restaurant_id', 'restaurant_table_id'];

    public function restaurant() {
        return $this->belongsTo(Restaurant::class);
    }

    public function restaurantTable() {
        return $this->belongsTo(RestaurantTable::class);
    }

    public function orderItems() {
        return $this->hasMany(OrderItem::class);
    }
}
