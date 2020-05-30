{{-- layoutsフォルダのapp.blade.phpを継承 --}}
@extends('layouts.app')

{{-- @yield('title')にテンプレートごとの値を代入 --}}
@section('title', '記事一覧')

{{-- application.blade.phpの@yield('content')に以下のレイアウトを代入 --}}
@section('content')
  <div>
    <a href="/articles/create">新規作成</a>
  </div>
  @foreach ($articles as $article)
    <h4>{{$article->title}}</h4>
    <p>{{$article->body}}</p>
    <a href="/articles/{{$article->id}}">詳細</a>
    <a href="/articles/{{$article->id}}/edit">編集</a>
    <form action="/articles/{{$article->id}}" method="post">
      {{ csrf_field() }}
      <input type="hidden" name="_method" value="delete">
      <input type="submit" name="" value="削除">
    </form>
    <hr>
  @endforeach
@endsection
