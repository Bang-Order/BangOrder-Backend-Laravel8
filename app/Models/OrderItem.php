<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderItem extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    protected $fillable = ['menu_id', 'order_id'];

    public function order() {
        return $this->belongsTo(Order::class);
    }

    public function menu() {
        return$this->belongsTo(Menu::class);
    }
}
