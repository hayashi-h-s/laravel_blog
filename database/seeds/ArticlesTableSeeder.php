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
            'title' => 'あんどぷらす志望動機',
            'body' => '約１年前に友人の勧めでプログラミングを学んだところ、非常に面白く感じ、それから独学や知り合いに教えてもらったりしてプログラミングを学んできました。プログラミングやITに関することを学んでいくうちに、ITの面白さと世の中に与えるインパクトの大きさを知り、エンジニアになり世の中を「より楽に、より面白く」したいと考えるようになりました。
            　貴社はミッションに「誇り高く、面白く、美しく」を掲げており、妥協せず、クライアントにより良いものを提供するという向上心の高い社風に大変感銘を受けました。エンジニア職は未経験ですが、熱意と向上心においては、とても高いことを自負しております。貴社通して、世の中をより面白くできるようなクリエイターとして貢献することができればと思い、貴社を志望いたしました。
            ',
            'user_id' => '1',
            "created_at" => new DateTime(),
            "updated_at" => new DateTime()
            ],


            [
            'title' => '将来のキャリアプランについて',
            'body' => 'フロントエンド、バックエンド、インフラなどの様々な開発工程を幅広く経験して、いずれは開発リーダーになり、ゼロから立ち上げさせられるような技術レベルも高く、しっかりと会社や世の中に貢献できるエンジニアになりたいと考えています。',
            'user_id' => '1',
            "created_at" => new DateTime(),
            "updated_at" => new DateTime()
            ],


            [
            'title' => '速水 信二と申します。自己紹介です。',
            'body' => '速水 信二 ２６歳です。
                        プログラミングの学習歴は約１年です。
                        MENTAというサービスを利用して、東京の会社のCTOの方にご指導いただだいていました。

                        掛川工業高等学校出身です。
                        学生時代は、小学校から中学校まで野球部に所属しており、高校時代はソフトボール部に所属しておりました。

                        趣味は、楽器でピアノとギターを弾くことができます。
                        小学校から中学校卒業までの間、ピアノを習っていました。
                        現在は、趣味でギターとしてバンド活動をしています。

                        夢は、ITの力で世の中を楽に面白くすることです。
                        よろしくお願いします！
                        ',
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
