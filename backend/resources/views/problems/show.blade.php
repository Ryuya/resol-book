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

    <p>タイトル：{{ $problem->title }}</p>
    <p>内容：{{ $problem->description }}</p>
    <p><a href="{{ route('answers.create',[$problem]) }}">
            本で回答する。
        </a></p>
    現在の回答
    @foreach ($problem->answers()->get() as $answer)
    <div style="border: 1px solid black">
        <a href="{{ $answer->url }}">タイトル：{{ $answer->title }}<br></a>
        詳細：{{ $answer->description }}
    </div>
    @endforeach

</body>

</html>