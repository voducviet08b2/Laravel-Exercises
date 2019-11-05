<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    @foreach($articles as $article)
<p>{{$article->id}}. {{$article->title}}</p> 
<form action="{{route('show1article.index',$article->id)}}" method="GET">
    <button type="submit">Xem bài viết</button>
</form>
@endforeach
</body>
</html>

