<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\NewsArticle;

class NewsArticleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
		$article = new NewsArticle();
		$article->author = 'Admin';
		$article->publish_date = date('Y-m-d');
		$article->title = 'Hello Laravel';
		$article->contents = 'Hello Laravel, here\'s the news!';
		$article->save();
		$article = new NewsArticle();
		$article->author = 'Admin';
		$article->publish_date = date('Y-m-d');
		$article->title = 'Hello Laravel 2';
		$article->contents = 'Hello Laravel, here\'s the news! 2';
		$article->save();
		$article = new NewsArticle();
		$article->author = 'Admin';
		$article->publish_date = date('Y-m-d');
		$article->title = 'Hello Laravel 3';
		$article->contents = 'Hello Laravel, here\'s the news! 3';
		$article->save();
		$article = new NewsArticle();
		$article->author = 'Admin';
		$article->publish_date = date('Y-m-d');
		$article->title = 'Hello Laravel 4';
		$article->contents = 'Hello Laravel, here\'s the news! 4';
		$article->save();
		$article = new NewsArticle();
		$article->author = 'Admin';
		$article->publish_date = date('Y-m-d');
		$article->title = 'Hello Laravel 5';
		$article->contents = 'Hello Laravel, here\'s the news! 5';
		$article->save();
    }
}
