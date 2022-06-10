<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Category extends Model
{
    use HasFactory;

    /**
     * @return HasMany
     */
    public function Product(): HasMany
    {
        return $this->hasMany(Products::class);
    }

    /**
     * Scope a query to only include popular users.
     *
     * @param Builder $query
     * @return Builder
     */
    public function scopePopular(Builder $query): Builder
    {
//        return $query->where('category_id', '=', null);
        return $query->where('status', '=', true);
    }

    public function categoryId(): Attribute
    {
        return Attribute::make(
            get: fn($category_id) => ($category_id == NULL) ? 'ندارد' : $category_id
        );
    }

    public function status(): Attribute
    {
        return Attribute::make(
            get: fn($status) => ($status == '0') ? 'ندارد' : $status
        );
    }
}
