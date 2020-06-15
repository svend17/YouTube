<!DOCTYPE HTML>
<html>
<head>
    <meta charset="utf-8">
    <title>Тег INPUT</title>
</head>
<body>

<form  method="post" action="{{ route('sList') }}">
    @csrf
    <p><b>Search:</b><br>
        <input type="text" name="videoName" size="40">
        <input type="submit" value="Search">
    </p>
</form>
<form method="get" action="/liked">
    <input type="submit" value="LikedList">
</form>
</body>
</html>
