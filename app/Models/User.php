<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;

use App\Models\Auth\UserPasswordResetToken;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Support\Facades\Storage;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $guarded = ['id'];
    
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
        'password' => 'hashed',
    ];

    public function resetPasswordTokens()
    {
        return $this->hasMany(UserPasswordResetToken::class);
    }

    public function tenant()
    {
        return $this->belongsTo(Tenant::class);
    }

    // public function stripeName()
    // {
    //     return $this->first_name;
    // }

    // public function avatar(): Attribute
    // {
    //     return Attribute::make(
    //         get: fn ($value) => asset(Storage::url($value) ?? 'default.png'),
    //     );
    // }
}
