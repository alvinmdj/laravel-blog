<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    
    /**
     * set 'id' as a guarded field.
     * other fields are fillable
     *
     * @var array
     */
    protected $guarded = ['id'];    

    /**
     * set with variable for eager loading
     * to solve N + 1 problem
     *
     * @var array
     */
    protected $with = ['author', 'category'];

    /**
     * Get the route key for the model.
     * Change default key from 'id' to 'slug'.
     *
     * @return string
     */
    public function getRouteKeyName()
    {
        return 'slug';
    }
    
    /**
     * Eloquent 1 to 1 relationship
     * 1 post belongs to 1 category
     *
     * @return void
     */
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
    
    /**
     * Eloquent 1 to 1 relationship
     * 1 post belongs to 1 author
     *
     * @return void
     */
    public function author()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
    
    /**
     * local scope called as 'filter' in controller.
     *
     * @param  mixed $query
     * @return void
     */
    public function scopeFilter($query, array $filters)
    {
        $query->when($filters['search'] ?? false, function ($query, $search) {
            return $query->where('title', 'like', '%' . $search . '%')
                         ->orWhere('body', 'like', '%' . $search . '%');
        });

        // whereHas('category', ...) -> 'category' from category method on top
        // 'use ($category)' to refer to $category in the first callback
        $query->when($filters['category'] ?? false, function ($query, $category) {
            return $query->whereHas('category', function ($query) use ($category) {
                $query->where('slug', $category);
            });
        });

        // whereHas('author', ...) -> 'author' from author method on top
        // No need of 'use ($author)' if using arrow function
        $query->when($filters['author'] ?? false, fn ($query, $author) =>
            $query->whereHas('author', fn ($query) =>
                $query->where('username', $author)
            )
        );
    }
}