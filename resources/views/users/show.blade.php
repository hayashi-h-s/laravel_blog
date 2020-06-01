@php
    $title = __('User') . ': ' . $user->name;
@endphp
@extends('layouts.app')
@section('content')
    <div class="text-center mb-5">
        <h1>{{ $user->name }}</h1>
    </div>
    <div class="text-center">
        <h1 class="display-5">投稿記事一覧</h1>
    </div>
    @foreach ($user->articles as $article )
    <div class="card mx-auto text-center container">
        <div class="card-body">
        <p>{{$article->created_at }}</p>
        <h3>ユーザー名：<a href="{{ url('users/'.$article->user->id) }}">{{ $article->user->name }}</a></h4>
        <h4><a href="/articles/{{$article->id}}">タイトル：{{$article->title}}</a></h3>

        <h5>内容：{{$article->body}}</h5>
        @guest
        @else
            @if( ( $article->user_id ) === ( Auth::user()->id ) )
                <a href="/articles/{{$article->id}}/edit" class="btn btn-info mb-2 mt-4 w-25">編集</a>
                <form action="/articles/{{$article->id}}" method="post">
                <input type="hidden" name="_method" value="delete">
                <input type="submit" name="" value="削除" class="btn btn-primary w-25">
                </form>
            @endif
        @endguest
        </div>
    </div>
    @endforeach
@endsection
