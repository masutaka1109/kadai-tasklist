@extends('layouts.app')

@section('content')

<!-- ここにページ毎のコンテンツを書く -->
@if(Auth::check())
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
                        @if(\Auth::id() === $task->user_id)
                            <tr>
                                <td>{!! link_to_route('tasks.show',$task->id,['task' => $task->id]) !!}</td>
                                <td>{{ $task->content }}</td>
                                <td>{{ $task->status }}</td>
                            </tr>
                        @endif
                    @endforeach
                </tbody>
    </table>
    @endif
    
        {{ $tasks->links() }}
    
        {{-- メッセージ作成ページへのリンク --}}
        {!! link_to_route('tasks.create', '新規タスクの作成', [], ['class' => 'btn btn-primary']) !!}
@else
<div class="center jumbotron">
            <div class="text-center">
                <h1>Task Management</h1>
                {{-- ユーザ登録ページへのリンク --}}
                {!! link_to_route('signup.get', 'Sign up now!', [], ['class' => 'btn btn-lg btn-primary']) !!}
            </div>
</div>
@endif

@endsection