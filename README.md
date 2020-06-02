
# Laravel_blog

PHP/Laravelで作成した、SNS型のブログサービスです。  
PHP/Laravelの学習をするために、作成いたしました。  
ログインしなくても、投稿一覧は観覧可能です。  

# 本番環境
 
Herokuにデプロイしています。  
ログインページより、テストユーザーでワンクリックログインできます。  
パスワード :  laravelsnsblog  
http://laravel-blog-portfolio.herokuapp.com

* ログアウト時でも使える機能
  -  投稿一覧の表示
  -  ユーザー詳細の表示

# 実装機能一覧

* ユーザー登録機能(Auth)
* 記事投稿機能(CRUD)
* validate機能(投稿時)MIDDLEWARE
* フラッシュメッセージ表示
* 日本時間表示に変更
* ページネーション機能の実装
* ログイン、ログアウト時のアクセス制限(MIDDLEWARE)
* 記事内容の幅をレスポンシブ対応(スマホ、タブレット)
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
