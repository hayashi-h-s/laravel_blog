{{-- layoutsフォルダのapplication.blade.phpを継承 --}}
@extends('layouts.app')

{{-- @yield('title')にテンプレートごとの値を代入 --}}
@section('title', '記事詳細')

{{-- application.blade.phpの@yield('content')に以下のレイアウトを代入 --}}
@section('content')

<div class="text-center">
  <h1 class="display-4 mb-3">記事詳細</h1>
</div>
<div class="card mx-auto text-center container">
  <div class="card-body">
    <h1 class="display-5">タイトル：{{$article->title}}</h1>
    <br><br>
    @guest
    @else
      <a href="/articles/{{$article->id}}/edit" class="btn btn-info w-50 mt-3 di">編集</a>
      <form action="/articles/{{$article->id}}" method="post">
        {{ csrf_field() }}
        <input type="hidden" name="_method" value="delete">
        <input type="submit" name="" value="削除する" class="btn btn-danger w-50 mt-3">
      </form>
    @endguest
  </div>
</div>
<div class="article-content mx-auto">
  <p class="mt-4">{!! nl2br(e($article->body)) !!}</p>
</div>
@endsection
