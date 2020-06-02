
database/seeds/UsersTableSeeder.php
 <?php

 use Illuminate\Database\Seeder;
 // created_at(作成時刻), updated_at(更新時刻)を登録するためのDateTimeクラス
//  use Carbon\Carbon;
 use App\User;

 class UsersTableSeeder extends Seeder
 {
     /**
      * Run the database seeds.
      *
      * @return void
      */
     public function run()
     {
        // usersテーブルに登録するレコードを配列で定義する。何人登録するかは任意。弊社は15名前後なので全員ここに記述した。
        // User::truncate();

        //特定のデータを追加
        User::create([
            'id'=> '100',
            'name' => '速水 信二',
            'email' => 'laravelsnsblog@guest.com',
            'password' => Hash::make('laravelsnsblog')
        ]);

        User::create([
            'id'=> '2',
            'name' => 'ユーザー１',
            'email' => 'laraveblog1@guest.com',
            'password' => Hash::make('laravelblog1')
        ]);

        User::create([
            'id'=> '3',
            'name' => 'ユーザー2',
            'email' => 'laraveblog2@guest.com',
        'password' => Hash::make('laravelblog2')
        ]);
     }
 }
