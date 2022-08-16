<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>タスク新規登録</h1>
    <form action="{{route('task.update',['task' => $task])}}" method="POST">
        @method('PATCH')
        @csrf
        タイトル：<input type="text" name="title" value="{{$task->title}}">
        <button type="submit">更新する</button>
    </form>
</body>
</html>