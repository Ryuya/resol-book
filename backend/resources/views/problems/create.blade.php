<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel</title>
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">
</head>

<body>
    <div class="container">
        <form action="{{ route('problems.store')}}" method="post">
            @csrf
            <h1>悩み事新規作成</h1>
            <div class="form-group">
                <label for="title">タイトル</label>
                <input id="title" type="text" name="title" class="form-control">
            </div>
            <div class="form-group">
                <label for="description">詳細</label>
                <input id="description" type="text" name="description" class="form-control">
            </div>

            <button type="submit" class="btn btn-primary">作成</button>
        </form>
    </div>
</body>

</html>