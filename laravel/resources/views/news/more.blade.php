<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/styles.css')}}">
    <title>News</title>
</head>
<body>
    <form action="{{route('news.index')}}">
        <input class="newsButton" type="submit" value="Home">
    </form>
    <div class="newsDiv">
        <div class="summaryDiv">{{$news->summary}}</div>
        <div class="textDiv">{{$news->full_text}}</div>
        @if($news->image)
            <img src="{{$news->image}}" alt="Cannot load image">
        @endif
    </div>
</body>
</html>
