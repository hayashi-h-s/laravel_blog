{{-- layoutsフォルダのapplication.blade.phpを継承 --}}
@extends('layouts.app')

{{-- @yield('title')にテンプレートごとの値を代入 --}}
@section('title', '新規作成')

{{-- application.blade.phpの@yield('content')に以下のレイアウトを代入 --}}
@section('content')
<div class="text-center">
  <h1 class="display-4">記事投稿</h1>
</div>
<div class="jumbotron container text-center">
  <form action="/articles" method="post">
    {{-- 以下を入れないとエラーになる --}}
    {{ csrf_field() }}
    <input type="hidden" name="user_id" value="{{ $authUser->id }}">
    <div>
      <div><label for="title" >タイトル</label></div>
      <input type="text" name="title"  placeholder="記事のタイトルを入れる" class="w-75" value="{{ old('title')}">
    </div>
    <div class="mt-3">
      <div><label for="body">内容</label></div>
      <textarea name="body" rows="8" cols="80" placeholder="記事の内容を入れる" class="w-75 article_create"></textarea>
    </div>

    <div>
      <input type="submit" value="投稿" class="btn btn-primary w-75 mt-3">
    </div>
  </form>
</div>
@endsection
