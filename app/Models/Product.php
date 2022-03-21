<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'title',
        'quantity',
        'price',
        'description',
        'company_id'
    ];

    public function purchases() {
        return $this->belongsToMany(Purchase::class, "purchase_products")->withPivot('quantity');
    }
}
