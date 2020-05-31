<?php

use Illuminate\Database\Seeder;

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
            'user_id' => '1'
            ],


            [
            'title' => 'タイトル2',
            'body' => '内容2',
            'user_id' => '1'
            ],


            [
            'title' => 'タイトル3',
            'body' => '内容3',
            'user_id' => '1'
            ],

            // テストユーザー1のデータ
                        [
            'title' => 'タイトル1',
            'body' => '内容1',
            'user_id' => '2'
            ],
            [
            'title' => 'タイトル2',
            'body' => '内容2',
            'user_id' => '2'
            ],
            [
            'title' => 'タイトル3',
            'body' => '内容3',
            'user_id' => '2'
            ],
            // テストユーザー2のデータ
                        [
            'title' => 'タイトル1',
            'body' => '内容1',
            'user_id' => '3'
            ],
            [
            'title' => 'タイトル2',
            'body' => '内容2',
            'user_id' => '3'
            ],
            [
            'title' => 'タイトル3',
            'body' => '内容3',
            'user_id' => '3'
            ],
        ]);
    }
}
