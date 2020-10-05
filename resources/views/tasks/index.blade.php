@extends('layouts.app')

@section('content')

<!-- ここにページ毎のコンテンツを書く -->
@if(count($tasks) > 0)
<table class="table table-striped">
    <thead>
                <tr>
                    <th>id</th>
                    <th>To do</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($tasks as $task)
                <tr>
                    <td>{{ $task->id }}</td>
                    <td>{{ $task->content }}</td>
                </tr>
                @endforeach
            </tbody>
</table>
@endif

    {{-- メッセージ作成ページへのリンク --}}
    {!! link_to_route('tasks.create', '新規メッセージの投稿', [], ['class' => 'btn btn-primary']) !!}

@endsection