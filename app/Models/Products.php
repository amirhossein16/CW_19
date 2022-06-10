<?php

namespace App\Models;

use App\Casts\Pricecast;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Products extends Model
{
    use HasFactory;

    protected $casts = [
        'price_product' => Pricecast::class
    ];

    /**
     * @return BelongsTo
     */
    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class);
    }

    /**
     * @return HasMany
     */
    public function order(): HasMany
    {
        return $this->hasMany(Orders::class);
    }

    /**
     * Scope a query to only include popular users.
     *
     * @param Builder $query
     * @return Builder
     */
    public function scopePopular(Builder $query): Builder
    {
//        return $query->where('Number of views', '>', 500);
//        return $query->where('Sales number', '>', 25);
        return $query->where('Product Name', 'like', "%" . 'سامسونگ' . "%");
    }
}
