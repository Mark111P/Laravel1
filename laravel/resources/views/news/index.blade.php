<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/styles.css')}}">
    <title>Index</title>
</head>
<body>
    <form action="{{route('news.create')}}">
        <input class="newsButton" type="submit" value="Add news">
    </form>

    <ul class="newsUl">
        @foreach($allNews as $news)
            <li>
                <div class="summaryDiv">{{$news->summary}}</div>
                <div class="textDiv">{{$news->short_description}}</div>
                <form action="{{route('news.show', [$news->id])}}">
                    <input class="newsReadMoreButton" type="submit" value="Read more">
                </form>
                <form action="{{route('news.edit', [$news->id])}}">
                    <input class="newsReadMoreButton" type="submit" value="Update">
                </form>
            </li>
        @endforeach
    </ul>
</body>
</html>
