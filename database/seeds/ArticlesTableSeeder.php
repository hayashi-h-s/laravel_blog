<?php

use Illuminate\Database\Seeder;
 use Carbon\Carbon;
class ArticlesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
  // articlesテーブルにデータをinsert
        DB::table('articles')->insert([

            [
            // 速水 信二 のデータ
            'title' => 'タイトル1',
            'body' => '内容1',
            'user_id' => '1',
            "created_at" => new DateTime(),
            "updated_at" => new DateTime()
            ],


            [
            'title' => 'タイトル2',
            'body' => '内容2',
            'user_id' => '1',
            "created_at" => new DateTime(),
            "updated_at" => new DateTime()
            ],


            [
            'title' => 'タイトル3',
            'body' => '内容3',
            'user_id' => '1',
            "created_at" => new DateTime(),
            "updated_at" => new DateTime()
            ],

            // テストユーザー1のデータ
                        [
            'title' => 'タイトル1',
            'body' => '内容1',
            'user_id' => '2',
            "created_at" => new DateTime(),
            "updated_at" => new DateTime()
            ],

            [
            'title' => 'タイトル2',
            'body' => '内容2',
            'user_id' => '2',
            "created_at" => new DateTime(),
            "updated_at" => new DateTime()
            ],

            [
            'title' => 'タイトル3',
            'body' => '内容3',
            'user_id' => '2',
            "created_at" => new DateTime(),
            "updated_at" => new DateTime()
            ],
            // テストユーザー2のデータ
                        [
            'title' => 'タイトル1',
            'body' => '内容1',
            'user_id' => '3',
            "created_at" => new DateTime(),
            "updated_at" => new DateTime()
            ],
            [
            'title' => 'タイトル2',
            'body' => '内容2',
            'user_id' => '3',
            "created_at" => new DateTime(),
            "updated_at" => new DateTime()
            ],
            [
            'title' => 'タイトル3',
            'body' => '内容3',
            'user_id' => '3',
            "created_at" => new DateTime(),
            "updated_at" => new DateTime()
            ],
        ]);
    }
}
