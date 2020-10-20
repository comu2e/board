@extends('layouts.app')

{{--section--}}
@section('post_content')
    <li class="nav-item">
        <a class="nav-link" href="{{ route('view_all') }}">{{ __('みんなの投稿') }}</a>
    </li>
@endsection
@section('view_all')
    <li class="nav-item">
        <a class="nav-link" href="{{ route('post') }}">{{ __('投稿する') }}</a>
    </li>
@endsection
{{--ここまでまとめて使えそう--}}


@section('content')
@foreach ($posts as $post)
    <div class="card text-center"style="width: 18rem;">
        <h5 class="card-header">記事</h5>
        <div class="card-body">
            <h5 class="card-title">{{$post["title"]}}</h5>
            <p class="card-text">{{$post["content"]}}</p>
            <a href="http://localhost:8000/detail/{{$post["id"]}}" class="btn btn-primary">詳細</a>
        </div>
    </div>

    @endforeach
    </body>
@endsection
