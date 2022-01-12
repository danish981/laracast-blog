<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $guarded = [];

    protected $with = ['category', 'author'];

    public function scopeFilter($query, array $filters)
    {
        $search = $filters['search'] ?? false;
        $category = $filters['category'] ?? false;
        $author = $filters['author'] ?? false;

        $query
            ->when($search, function ($query, $search) {
                $query->where(fn ($query) =>
                $query->where('title', 'like', '%' . $search . '%')
                    ->orWhere('body', 'like', '%' . $search . '%')
                );
            })
            ->when($category, function ($query, $category) {
                $query
                    ->whereHas('category', function ($query) use ($category) {
                        $query->where('slug', $category);
                    });
            })
            ->when($author, function ($query, $author) {
                $query
                    ->whereHas('author', function ($query) use ($author) {
                        $query->where('username', $author);
                    });
            });
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
