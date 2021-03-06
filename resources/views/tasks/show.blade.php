@extends('layouts.app')

@section('content')

<h1>id = {{ $task->id }}のタスクの詳細ページ</h1>

<table class="table table-borderd">
    <tr>
        <th>id</th>
        <td>{{ $task->id }}</td>
    </tr>
    <tr>
        <th>状態</th>
        <td>{{ $task->status }}</td>
    </tr>
    <tr>
        <th>タスク</th>
        <td>{{ $task->content }}</td>
    </tr>
</table>

{{-- メッセージ編集ページへのリンク --}}
    {!! link_to_route('tasks.edit', 'このタスクを編集', ['task' => $task->id], ['class' => 'btn btn-primary']) !!}
    
    {!!Form::model($task,['route' => ['tasks.destroy',$task->id],'method'=>'delete']) !!}
        {!! Form::submit('削除',['class' => 'btn btn-danger']) !!}
    {!! Form::close() !!}

@endsection