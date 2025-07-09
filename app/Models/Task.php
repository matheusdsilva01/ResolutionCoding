<?php

namespace App\Models;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    use HasFactory, Authenticatable;
    protected $table = 'tasks';

    protected $fillable = [
        'title',
        'content'
    ];
}
