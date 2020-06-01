
# Laravel_blog

PHP/Laravelで作成した、SNS型のブログサービスです。  
PHP/Laravelの学習を作成いたしました。  
ログインしなくても、投稿一覧は観覧可能です。

# 本番環境
 
Herokuにデプロイしています。  
ログインページより、テストユーザー(速水 信二)でワンクリックログインできます。  
速水信二のパスワード :  laraveblog  
http://laravel-blog-portfolio.herokuapp.com/login  

# 実装機能一覧

* ユーザー登録機能
* Authによるユーザー認証機能
* ブログ記事投稿機能
* 記事投稿機能(CRUD)
* エラーメッセージ表示
* フラッシュメッセージ表示
* validate機能(投稿、ユーザー情報入力)
* 日本時間表示に変更
* ページネーション機能の実装
* デバッグ技術
  -  logger()ヘルパー
  -  val(\Psy\sh());

# 使用技術
 
* フロントエンド
  - CSS
  - Bootstrap
* バックエンド
  - PHP 7.4
  - Laravel 7.13.0
* サーバー
  - Apache 2.4.41
* DB
  - MySQL 5.7
* インフラ
  - Heroku
