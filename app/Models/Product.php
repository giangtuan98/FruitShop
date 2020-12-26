<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $table = "products";

    protected $fillable = [
        'category_id',
        'name',
        'unit',
        'unit_price',
        'promotion_price',
        'promotion_start_date',
        'promotion_end_date',
        'description',
        'image',
        'is_new'
    ];

    protected $dates = ['promotion_start_date', 'promotion_end_date'];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function orderDetails()
    {
        return $this->hasMany(OrderDetail::class);
    }

    public function images()
    {
        return $this->morphMany(Image::class, 'imageable');
    }

    public function getIsSaleAttribute()
    {
        $now = Carbon::now();

        return $this->promotion_start_date->lte($now) && $this->promotion_end_date->gte($now);
    }

    public function scopeHotProduct($query)
    {
        return $query->where('is_hot', 1);
    }

    public function scopeComingProduct($query)
    {
        return $query->where([['is_coming_soon', 1], ['quantity', 0]]);
    }
}
