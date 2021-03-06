<?php

namespace App\Models;

use App\Http\Middleware\Authenticate;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Auth\Authenticatable as AuthenticableTrait;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;

class Veo extends Model implements AuthenticatableContract
{
    use AuthenticableTrait;
    use HasFactory;

    protected $guard = 'veo';

    protected $fillable = [
        'firstName',
        'lastName',
        'userName',
        'mobileNumber',
        'gender',
        'district',
        'region',
        'email',
        'password',
    ];


    protected $hidden = [
        'password',
        'token',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
    ];


    public function article()
    {
        return $this->hasMany('App\Models\Article');
    }
}
