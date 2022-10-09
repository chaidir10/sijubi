<?php

namespace App\Models;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory, Sluggable;

    protected $guarded = ['id'];
    protected $with = ['category', 'author'];

    public function scopeFilter($query, array $filters)
    {
        // if (isset($filters['serach']) ? $filters['search'] : false) {
        //     return $query->where('title', 'like', '%' . $filters['serach'] . '%')
        //         ->orWhere('body', 'like', '%' . $filters['serach'] . '%');
        // }

        $query->when(
            $filters['search'] ?? false,
            function ($query, $search) {
                return $query->where('title', 'like', '%' . $search . '%')
                    ->orWhere('body', 'like', '%' . $search . '%');
            }
        );

        $query->when(
            $filters['category'] ?? false,
            function ($query, $category) {
                return $query->whereHas('category', function ($query) use ($category) {
                    $query->where('slug', $category);
                });
            }
        );

        $query->when(
            $filters['author'] ?? false,
            fn ($query, $author) => $query->whereHas(
                'author',
                fn ($query)
                => $query->where('username', $author)
            )
        );
    }

    public function category()
    {
        // Relasi 1 ke 1
        return $this->belongsTo(Category::class);
    }

    public function author()
    {
        // Relasi 1 ke 1
        return $this->belongsTo(User::class, 'user_id');
    }

    public function getRouteKeyName()
    {
        return 'slug';
    }

    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'title'
            ]
        ];
    }
}
