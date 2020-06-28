@extends('layouts.app')

@section('content')
<form  method="post" action="{{ route('sList') }}">
    @csrf
    <div class="ml-2">
        <input type="text" placeholder="Search..." name="videoName" size="40">
        <input class="btn btn-primary" type="submit" value="Search">
    </div>
</form>
<form method="get" action="/liked">
    <input class="btn btn-primary ml-5" type="submit" value="LikedList">
</form>
@endsection
