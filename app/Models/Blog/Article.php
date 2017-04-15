<?php

namespace App\Models\blog;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use SoftDeletes;

    protected $table;
    protected $fillable = ['author_id', 'category_id', 'slug', 'title'
        , 'subtitle', 'content','html_content','article_image'
        , 'meta_keywords','meta_description','is_published','published_at'
        , 'layout'
    ];

    protected $guarded = [];
    protected $dates = ['published_at'];
    protected $append = ['author_name'];

    public function __construct(array $attributes = [])
    {
        parent::__construct($attributes);
        $this->table = config('blog.articles_table');
    }
}
