<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    // Разрешаем массовое присвоение этих полей
    protected $fillable = ['id', 'name', 'email'];
}
