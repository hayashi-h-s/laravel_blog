{{-- layoutsフォルダのapp.blade.phpを継承 --}}
@extends('layouts.app')

{{-- @yield('title')にテンプレートごとの値を代入 --}}
@section('title', '編集')

{{-- application.blade.phpの@yield('content')に以下のレイアウトを代入 --}}
@section('content')
<div class="jumbotron container text-center ">
  <h1 class="display-4">記事編集</h1>
  <form action="/articles/{{$article->id}}" method="post">
    {{ csrf_field() }}
    <input type="hidden" name="user_id" value="{{ $authUser->id }}">
    <div>
      <div><label for="title">タイトル</label></div>
      <input type="text" name="title" placeholder="記事のタイトルを入れる" value="{{$article->title}}" class="w-75">
    </div>
    <div class="mt-3">
      <div><label for="body">内容</label></div>
      <textarea name="body" rows="8" cols="80" placeholder="記事の内容を入れる" class="w-75 article_create">{{$article->body}}</textarea>
    </div>
    <div>
      <input type="hidden" name="_method" value="patch">
      <input type="submit" value="更新" class="btn btn-primary w-75 mt-3">
    </div>
  </form>
</div>
@endsection
