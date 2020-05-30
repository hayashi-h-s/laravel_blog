@extends('layouts.app')

@section('content')
<div class="text-center">
   <h1>Laravel_Blog</h1>
   <p class="mt-3">Laravelで簡易的なブログ型のSNSを作成いたしました。</p>
   <p>ユーザー登録画面より、簡単ログインできます。</p>
</div>
<div class="container mr-5 mt-5">
   <h3>機能一覧</h3>
   <li>ユーザー機能(Auth)</li>
   <li>記事投稿機能(CRUD処理)</li>
   <li>一覧更新ラーメッセージ表示</li>
   <li>覧ラーメッセージ表示</li>
   <li>ラーメッセージ表示</li>
   <li>フラッシュメッセージ表示</li>
</div>
@endsection
