<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Http\Models\Product;

class Purchase extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'status',
    ];

    public function products() {
        return $this->belongsToMany(Product::class, "purchase_products")->withPivot('quantity');
    }

    public function users() {
        return $this->belongsToMany(User::class, "user_purchases");
    }
}
