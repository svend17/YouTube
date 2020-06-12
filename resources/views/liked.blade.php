<!DOCTYPE HTML>
<html>
<head>
    <meta charset="utf-8">
    <title>Liked Videos</title>
</head>
<body>
<form method="get" action="{{route('upd')}}">
    @csrf
    @foreach($like as $id)
        <iframe width="400" height="320"
                src="https://www.youtube.com/embed/{{$id->videoID}}">
        </iframe>
        <input type="checkbox" name="video[]" value="{{$id}}" />
    @endforeach
    <input type="submit" name="DeleteVideo" value="Delete Video From List" />
</form>
</body>
</html>
