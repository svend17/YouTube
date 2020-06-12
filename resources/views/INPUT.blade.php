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
    </p>
</form>
</body>
</html>
