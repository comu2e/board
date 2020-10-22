@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">記事一覧</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        {{--成功時のメッセージ--}}
                        @if (session('success'))
                            <div class="alert alert-success">{{ session('success') }}</div>
                        @endif
                        {{-- エラーメッセージ --}}
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        <div class="table-resopnsive">
                            <table class="table table-striped">

                                <tbody>

{{--                                記事表示--}}
                                @foreach ($posts as $post)
                                    <div class="card text-center"style="width: 18rem;">
                                        <h5 class="card-header">{{$post["title"]}}</h5>
                                        <div class="card-body">
                                            <h5 class="card-title"></h5>
                                            <p class="card-text">{{$post["content"]}}</p>
                                            <a href="/admin/{{ $post->id }}" class="btn btn-primary">詳細</a>
                                        </div>
                                    </div>

                                    @endforeach

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
