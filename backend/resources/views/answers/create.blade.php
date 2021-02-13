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
        <form action="{{ route('answers.store',[$problem])}}" method="post">
            @csrf
            <h1>本で回答する</h1>
            <div class="form-group">
                <label for="url">本のURL</label>
                <input id="url" type="url" name="url" class="form-control" placeholder="Amazon等のURLを入力してください">
            </div>
            <div class="form-group">
                <label for="title">タイトル</label>
                <input id="title" type="text" name="title" class="form-control" placeholder="Title">
            </div>
            <div class="form-group">
                <label for="description">ひとこと</label>
                <input id="description" type="text" name="description" class="form-control" placeholder="">
            </div>


            <button type="submit" class="btn btn-primary">作成</button>
        </form>
    </div>
</body>

</html>