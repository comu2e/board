@extends('layouts.app')


@section('post_content')
    <li class="nav-item">
        <a class="nav-link" href="{{ route('index') }}">{{ __('みんなの投稿') }}</a>
    </li>
@endsection
@section('index')
    <li class="nav-item">
        <a class="nav-link" href="{{ route('create') }}">{{ __('投稿する') }}</a>
    </li>
@endsection


@section('content')
    <form method="post">
        @csrf
        <div class="form">
            <div class="form-title">
                <label for="title">タイトル</label>
                <input class="" name="title" value="{{ old('title') }}">
            </div>

            <div class="form-content">
                <label for="content" class="form-content">内容</label>
                <textarea class="" name="content" cols="50" rows="10">{{ old('content') }}</textarea>
            </div>

            <div class="form-submit">
                <button type="submit">投稿する</button>
            </div>
        </div>
    </form>
@endsection
