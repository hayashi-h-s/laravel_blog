@php
    $title = __('User') . ': ' . $user->name;
@endphp
@extends('layouts.app')
@section('content')
    <div class="container">
        <h1>{{ $title }}</h1>

        {{-- 編集・削除ボタン --}}
        <div>
            <a href="{{ url('users/'.$user->id.'/edit') }}" class="btn btn-primary">
                {{ __('Edit') }}
            </a>
            {{-- 削除ボタンは後で正式なものに置き換えます --}}
            <a href="#" class="btn btn-danger">
                {{ __('Delete') }}
            </a>
        </div>

        {{-- ユーザー1件の情報 --}}
        <dl class="row">
            <dt class="col-md-2">{{ __('ID') }}</dt>
            <dd class="col-md-10">{{ $user->id }}</dd>
            <dt class="col-md-2">{{ __('Name') }}</dt>
            <dd class="col-md-10">{{ $user->name }}</dd>
            <dt class="col-md-2">{{ __('E-Mail Address') }}</dt>
            <dd class="col-md-10">{{ $user->email }}</dd>
        </dl>
    </div>
    @foreach ($user->articles as $article)
    <div class="card mx-auto text-center container">
        <div class="card-body">
        <p>{{$article->created_at }}</p>
        <h3>ユーザー名：<a href="{{ url('users/'.$article->user->id) }}">{{ $article->user->name }}</a></h4>
        <h4><a href="/articles/{{$article->id}}">タイトル：{{$article->title}}</a></h3>

        <h5>内容：{{$article->body}}</h5>
        @guest
        @else
            <a href="/articles/{{$article->id}}/edit" class="btn btn-info mb-2 mt-4 w-25">編集</a>
            <form action="/articles/{{$article->id}}" method="post">
            {{ csrf_field() }}
            <input type="hidden" name="_method" value="delete">
            <input type="submit" name="" value="削除" class="btn btn-primary w-25">
            </form>
        @endguest
        </div>
    </div>
    @endforeach
@endsection
