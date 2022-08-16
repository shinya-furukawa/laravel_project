<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
        <h1>タスク一覧</h1>

        @if (count($tasks) > 0)
            @foreach ($tasks as $task)
                <div style="display: flex;">
                    {{$task->title}}
                    <a href="{{route('task.edit',['task' => $task])}}" style="margin-left: 10px">編集</a>
                    <form action="{{route('task.destroy',['task'=>$task])}}" method="POST">
                        @method('DELETE')
                        @csrf
                        <button type="submit" style="margin-left: 10px">削除</button>
                    </form>
                </div>
            @endforeach
        @else
            <div>タスクがありません</div>
        @endif

        <a href="{{route('task.create')}}">新規登録</a>

    </body>
</html>