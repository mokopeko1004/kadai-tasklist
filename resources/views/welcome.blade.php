@extends('layouts.app')

@section('content')
    @if (Auth::check())
            <div class="col-sm-8">
                {{-- タスク一覧 --}}
                @include('tasks.index')
            </div>
    @else
        <div class="center jumbotron">
            <div class="text-center">
                <h1>ようこそ TaskListへ！！</h1>
                {{-- ユーザ登録ページへのリンク --}}
                {!! link_to_route('signup.get', 'いますぐ会員登録!', [], ['class' => 'btn btn-lg btn-primary']) !!}
            </div>
        </div>
    @endif
@endsection