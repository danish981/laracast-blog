<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $guarded = ['id'];    // the reverse of mass assignment, everything except this field, can be mass assigned
    // protected $fillable = ['title', 'excerpt', 'body'];   // these fields can be mass assigned

}
