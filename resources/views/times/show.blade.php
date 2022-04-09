<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>show</title>
</head>
<body>
    <div class="container">

        <h2> {{ $time->nome_time }}</h2>

        @foreach ($time->brasao as $brasao)
            <img src=" {{ env('APP_URL') }}/storage/{{ $brasao->path }}" alt="">

        @endforeach

    </div>
</body>
</html>
