@extends('layouts.app')
{{--section--}}
@section('post_content')
    <li class="nav-item">
        <a class="nav-link" href="{{ route('admin.index') }}">{{ __('みんなの投稿') }}</a>
    </li>
@endsection
@section('index')
    <li class="nav-item">
        <a class="nav-link" href="{{ route('admin.create') }}">{{ __('投稿する') }}</a>
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
                <form action="/admin/{{ $post->id }}" method="POST">
                    @csrf
                    @method('PUT')
                    <textarea name="content">
                    {{$post["content"]}}
                    </textarea>
                    <input class="btn btn-primary" type="submit"value="Update">


                <form action="{{route('admin.destroy',$post->id) }}" method="POST">
                    @csrf
                    @method('DELETE')

                    <button type="submit" class="btn btn-danger">
                        Delete
                    </button>

                </form>

            </div>
        </div>
    </div>




@endsection
