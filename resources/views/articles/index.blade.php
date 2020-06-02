{{-- layoutsフォルダのapp.blade.phpを継承 --}}
@extends('layouts.app')

{{-- @yield('title')にテンプレートごとの値を代入 --}}
@section('title', '記事一覧')

{{-- application.blade.phpの@yield('content')に以下のレイアウトを代入 --}}
@section('content')
  <h1 class="text-center">
    みんなの投稿記事一覧
  </h1>
  @foreach ($articles as $article)
    <div class="card mx-auto text-center container">
      <div class="card-body">
        <p>{{$article->created_at }}</p>
        <h5 class="mb-3"><a href="{{ url('users/'.$article->user->id) }}">ユーザー名：{{ $article->user->name }}</a></h4>
        <h3 class="mb-3"><a href="/articles/{{$article->id}}">タイトル：{{$article->title}}</a></h3>
        <h5 class=""><a href="/articles/{{$article->id}}">[記事の詳細を表示]</a></h3>
        @guest
        @else
          @if( ( $article->user_id ) === ( Auth::user()->id ) )
            <a href="/articles/{{$article->id}}/edit" class="btn btn-info mb-2 mt-4 w-25">編集</a>
            <form action="/articles/{{$article->id}}" method="post">
              {{ csrf_field() }}
              <input type="hidden" name="_method" value="delete">
              <input type="submit" name="" value="削除" class="btn btn-primary w-25">
            </form>
          @endif
        @endguest
      </div>
    </div>
  @endforeach
  <div class="d-flex justify-content-center mt-3">
      {{ $articles->links() }}
  </div>
@endsection
