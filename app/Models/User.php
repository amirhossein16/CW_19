<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'first_name',
        'last_name',
        'email',
        'city',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    /**
     * @return HasMany
     */
    public function orders(): HasMany
    {
        return $this->hasMany(Orders::class);
    }

    public function email(): Attribute
    {
        return new Attribute(
            set: fn($email) => strtolower($email)
        );
    }

    public function first_name(): Attribute
    {
        return Attribute::make(
            get: fn($first_name) => ucfirst($first_name)
        );
    }

    public function last_name(): Attribute
    {
        return Attribute::make(
            get: fn($last_name) => ucfirst($last_name)
        );
    }

    public function city(): Attribute
    {
        return Attribute::make(
            get: fn($city) => ucfirst($city)
        );
    }

    public function getFullNameAttribute(): string
    {
        return $this->first_name . " " . $this->last_name;
    }
}
