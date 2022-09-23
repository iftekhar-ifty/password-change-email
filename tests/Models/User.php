<?php

namespace Iftekhar\PasswordChangeEmail\Tests\Models;
use Iftekhar\PasswordChangeEmail\Contracts\PasswordChangeNotificationContract;
use Iftekhar\PasswordChangeEmail\Traits\PasswordChangeMailNotificationTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Mail\Mailable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable implements PasswordChangeNotificationContract
{
    use HasFactory, Notifiable,PasswordChangeMailNotificationTrait;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
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



}
