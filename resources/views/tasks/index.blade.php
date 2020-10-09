@extends('layouts.app')

@section('content')

<!-- ここにページ毎のコンテンツを書く -->
@if(count($tasks) > 0)
<table class="table table-striped">
    <thead>
                <tr>
                    <th>id</th>
                    <th>Todo</th>
                    <th>status</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($tasks as $task)
                <tr>
                    <td>{{ $task->id }}</td>
                    <td>{{ $task->content }}</td>
                    <td>{{ $task->status }}</td>
                </tr>
                @endforeach
            </tbody>
</table>
@endif

    {{ $tasks->links() }}

    {{-- メッセージ作成ページへのリンク --}}
    {!! link_to_route('tasks.create', '新規メッセージの投稿', [], ['class' => 'btn btn-primary']) !!}

@endsection