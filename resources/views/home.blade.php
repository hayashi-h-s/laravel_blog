@extends('layouts.app')

@section('content')
<div class="text-center">
   <h1>Laravel_SNS_Blog</h1>
   <p class="mt-3">ポートフォリオとしてLaravelでブログ型のSNSを作成いたしました。</p>
   <p>ユーザー登録画面より、簡単ログインできます。</p>
   <p>ログイン時のみ、記事の投稿が可能です。</p>
      @guest
         <div class="text-center mb-3 w-100">
            <a href="/guest" class="btn btn-info w-25">テストユーザーでログイン</a>
         </div>
      @else
      @endguest
      <a class="btn btn-outline-dark w-25" href="https://github.com/hayashi-h-s/laravel_sns_blog">
         Githubへのリンク
      </a>
</div>
@endsection
