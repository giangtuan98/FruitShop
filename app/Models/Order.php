<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Order extends Model
{
    use HasFactory;

    protected $table = "orders";

    protected $fillable = [
        'customer_info',
        'total',
        'code',
    ];

    protected $casts = ['customer_info' => 'json'];

    public function orderDetails()
    {
        return $this->hasMany(OrderDetail::class);
    }

    public static function getRandomUniqueCode()
    {
        $random = "";
        do {
            $random = Str::random(10);
            $count = self::where('code', $random)->count();
        } while ($count > 0);

        return $random;
    }

    // public function getCustomerInfoAttribute($value)
    // {
    //     return json_decode($value);
    // }
}
