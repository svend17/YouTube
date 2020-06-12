<!DOCTYPE HTML>
<html>
<head>
    <meta charset="utf-8">
    <title>searchList</title>
</head>
<body>
<form method="post" action="{{route('upd')}}">
    @csrf
    @foreach($arr as $id)
        <iframe width="400" height="320"
                src="https://www.youtube.com/embed/{{$id}}">
        </iframe>
        <input type="checkbox" name="video[]" value="{{$id}}" />
    @endforeach
    <input type="submit" name="LikedVideo" value="Liked Video List" />
</form>
</body>
</html>
