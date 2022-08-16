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
    <form action="{{route('task.store')}}" method="POST">
        @csrf
        タイトル：<input type="text" name="title">
        <button type="submit">登録</button>
    </form>
</body>
</html>