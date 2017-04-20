<?php

namespace App\Models\Blog;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{

    protected $fillable = ['name', 'slug'];

    public function articles()
    {
        return $this->hasMany('App\Models\Blog\Article');
    }

    public static function getFiveMostPopularOnes()
    {
        return static::with('articles')->get()->sortByDesc(function ($category, $key) {
            return count($category->articles);
        })->take(5)->mapWithKeys(function ($item) {
            return [$item['id'] => ['slug' => $item['slug'], 'name' => $item['name']]];
        });

    }

    public function getArticlesCountAttribute()
    {
        return $this->articles->count();
    }
}
