<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    protected $fillable = ['restaurant_id', 'category_id'];

    public function restaurant() {
        return $this->belongsTo(Restaurant::class);
    }

    public function menuCategory() {
        return $this->belongsTo(MenuCategory::class);
    }

    public function orderItems() {
        return $this->hasMany(OrderItem::class);
    }
}
