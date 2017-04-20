<?php

use Database\TruncateTable;
use Carbon\Carbon as Carbon;
use Illuminate\Database\Seeder;
use Database\DisableForeignKeys;
use Illuminate\Support\Facades\DB;

class ArticlesTableSeeder extends Seeder
{
    use DisableForeignKeys, TruncateTable;

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->disableForeignKeys();

        DB::table('articles')->truncate();
        factory(App\Models\Blog\Article::class, 3)->create();

        $this->enableForeignKeys();

//        $this->disableForeignKeys();
//        $this->truncate(config('blog.articles_table'));
//
//        $articles = [
//            [
//                'slug'              => 'Admin Shohel',
//                'title'             => 'admin@ocodysoft.com',
//                'subtitle'          => bcrypt('1234'),
//                'content'           => 'content',
//                'html_content'      => '',
//                'meta_keywords'     => '',
//                'published_at'      => Carbon::now(),
//            ]
//        ];
//
//        DB::table(config('blog.articles_table'))->insert($articles);
//        $this->enableForeignKeys();
    }

}
