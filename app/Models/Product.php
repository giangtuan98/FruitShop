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

    const SORT_PRICE_LOW_TO_HIGH = 1;
    const SORT_PRICE_HIGH_TO_LOW = 2;
    const SORT_ALPHABETICALLY = 3;
    const SORT_FIRST_NEW = 4;
    const SORT_FIRST_SALE = 5;

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

    public function scopeInStock($query)
    {
        return $query->where([['quantity', '>', 0], ['is_coming_soon', 0]]);
    }

    public function getPriceAttribute()
    {
        $price = $this->is_sale ? $this->promotion_price : $this->unit_price;

        $this->attributes['price'] = $price;
        return $price;
    }

    public function scopeSortByType($query, $sortType)
    {
        if ($sortType == self::SORT_ALPHABETICALLY) {
            $query->orderBy('name');
        }

        if ($sortType == self::SORT_FIRST_NEW) {
            $query->orderBy('is_new', 'DESC');
        }

        if ($sortType == self::SORT_FIRST_SALE) {
            $query->orderBy('sale_flg', 'DESC');
        }

        if ($sortType == self::SORT_PRICE_LOW_TO_HIGH) {
            $query->orderBy('price');
        }

        if ($sortType == self::SORT_PRICE_HIGH_TO_LOW) {
            $query->orderBy('price', 'DESC');
        }

        return $query;
    }
}
