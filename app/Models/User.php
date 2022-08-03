<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Model\User as Authenticatable;

class User extends Authenticatable
{
    use HasFactory;

    protected $table = 'user';
    protected $primaryKey = 'user_id';

    protected $fillable=['fullname', 'username', 'password'];
}
