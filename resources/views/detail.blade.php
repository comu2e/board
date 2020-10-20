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
    <div class="container">
        <div class="card text-center"style="width: 18rem;">
            <h5 class="card-header">記事</h5>
            <div class="card-body">
                <h5 class="card-title">{{$post["title"]}}</h5>
                {{--        編集フォーム--}}
                <form method="POST">
                    @csrf
                    <textarea name="content">
                    {{$post["content"]}}
                    </textarea>
                    <input class="btn btn-primary" type="submit"value="Update">
                    {{--    編集確定用--}}
                    <button type="button" class="btn btn-danger" >
                        {{--       削除用--}}
                        <a href="http://localhost:8000/delete/{{$post["id"]}}">Delete</a></button>

                </form>

            </div>
        </div>
    </div>




@endsection
