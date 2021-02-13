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
        <h1>みんなの悩み事一覧</h1>
        <a href="{{ route('problems.create') }}">
            悩み事作成
        </a>
        @foreach ($problems as $problem)
        <div style="border:solid 0px black">
            <p><b>タイトル:{{ $problem->title}}</b>
                <a href="{{ route('problems.show',[$problem]) }}">詳細＆回答する</a>
            </p>
            @foreach($problem->answers()->get() as $index => $answer)
            <div style="border:solid 0px black">
                {{$index+1}}.<a href="{{ $answer->url }}">{{$answer->title}}</a>
            </div>
            @endforeach
        </div>
        @endforeach
        <!-- <div style="border:solid 1px  black">

        </div> -->
    </div>
</body>

</html>