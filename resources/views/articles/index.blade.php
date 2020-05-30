{{-- layoutsフォルダのapp.blade.phpを継承 --}}
@extends('layouts.app')

{{-- @yield('title')にテンプレートごとの値を代入 --}}
@section('title', '記事一覧')

{{-- application.blade.phpの@yield('content')に以下のレイアウトを代入 --}}
@section('content')
  <h1 class="text-center">
    投稿記事一覧
  </h1>
  @foreach ($articles as $article)
    <div class="card mx-auto text-center container">
      <div class="card-body">
        <p>{{$article->created_at }}</p>
        <h4><a href="/articles/{{$article->id}}">{{$article->title}}</a></h4>
        <p>{{$article->body}}</p>
        @guest
        @else
          <a href="/articles/{{$article->id}}/edit" class="btn btn-info mb-2">編集</a>
          <form action="/articles/{{$article->id}}" method="post">
            {{ csrf_field() }}
            <input type="hidden" name="_method" value="delete">
            <input type="submit" name="" value="削除" class="btn btn-primary">
          </form>
        @endguest
      </div>
    </div>
  @endforeach
@endsection
