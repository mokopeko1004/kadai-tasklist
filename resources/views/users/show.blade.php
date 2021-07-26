@extends('layouts.app')

@section('content')
    <h1>{{ $user->name }}</h1>
        {{-- タスク作成ページへのリンク --}}
        {!! link_to_route('tasks.create', '新規タスクの作成', [], ['class' => 'btn btn-primary']) !!}
@endsection