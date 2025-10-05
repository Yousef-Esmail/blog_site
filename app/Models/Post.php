<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    // الأعمدة اللي نقدر نكتب فيها
    protected $fillable = ['title', 'body'];
}
