<?php

use Illuminate\Database\Seeder;

class SettingsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('settings')->truncate();
        DB::table('settings')->insert(['name' => 'meta_title', 'value' => 'myblog']);
        DB::table('settings')->insert(['name' => 'meta_author', 'value' => 'Shohel Rana']);
        DB::table('settings')->insert(['name' => 'meta_description', 'value' => 'my personal blog in laravel 5.4']);
        DB::table('settings')->insert(['name' => 'meta_keywords', 'value' => 'laravel,blog,articles']);
        DB::table('settings')->insert(['name' => 'meta_robots', 'value' => 'NOINDEX, NOFOLLOW']);
        DB::table('settings')->insert(['name' => 'disqus_shortname', 'value' => '']);
        DB::table('settings')->insert(['name' => 'google_analytics_id', 'value' => '']);

    }
}
