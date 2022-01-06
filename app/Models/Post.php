<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $guarded = [];

    protected $with = ['category', 'author'];




    // we are calling function filter, we pass the second argument in filter() function,
    // the first argument is passed by laravel automatically, and that is query builder
    public function scopeFilter($query, array $filters)
    {
        // nullsafe operator in php8, by default we are not searching anything
        // if we have any other filters for the posts, we can add them directly here
        // when() functions is in query builder, check https://laravel.com/docs/8.x/queries
        $query->when($filters['search'] ?? false, fn ($query, $search) =>
        $query
            ->where('title', 'like', '%' . $search . '%')
            ->orWhere('body', 'like', '%' . $search . '%'));
    }



    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function author()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
