{{-- layoutsフォルダのapplication.blade.phpを継承 --}}
@extends('layouts.app')

{{-- @yield('title')にテンプレートごとの値を代入 --}}
@section('title', '記事詳細')

{{-- application.blade.phpの@yield('content')に以下のレイアウトを代入 --}}
@section('content')
<div class="jumbotron container text-center ">
  <h1 class="display-5">記事詳細</h1>
  <h1 class="display-4">{{$article->title}}</h1>
  <h2>{{$article->body}}</h2>
  <br><br>
  @guest
  @else
    <a href="/articles/{{$article->id}}/edit" class="btn btn-info w-50 mt-3">編集</a>
    <form action="/articles/{{$article->id}}" method="post">
      {{ csrf_field() }}
      <input type="hidden" name="_method" value="delete">
      <input type="submit" name="" value="削除する" class="btn btn-danger w-50 mt-3">
    </form>
  @endguest
</div>
@endsection
