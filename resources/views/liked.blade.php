<!DOCTYPE HTML>
<html>
<head>
    <meta charset="utf-8">
    <title>Liked Videos</title>
</head>
<body>
<form method="post" action='/liked1'>
    @csrf
    @foreach($like as $id)
        <iframe width="400" height="320"
                src="https://www.youtube.com/embed/{{$id->videoID}}">
        </iframe>
        <input type="checkbox" name="videoD[]" value="{{$id->videoID}}" />
    @endforeach
    <input type="submit" name="DeleteVideo" value="Delete Video From List" />
</form>
<form method="get" action="/">
    <input type="submit" value="Search">
</form>
</body>
</html>
