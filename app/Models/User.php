<?php

namespace App\Models;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    use Authenticatable;

    /**
     * The DB table used by model
     *
     * @var string
     */
    protected $table = 'users';

    /**
     * The attributes that are mass assignable
     *
     * @var array
     */
    protected $fillable = ['first_name', 'last_name', 'location', 'email', 'password'];

    /**
     * The attributes excluded from the model's JSON form
     *
     * @var array
     */
    protected $hidden = ['password', 'remember_token'];
}
