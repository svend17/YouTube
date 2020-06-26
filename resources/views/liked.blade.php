@extends('layouts.app')

@section('content')
<body>
<form class="px-5" method="post" action='/liked1'>
    @csrf
    <div class="vid">
        @foreach($like as $id)
            <div class="mx-auto">
                <iframe width="480" height="320"
                        src="https://www.youtube.com/embed/{{$id->videoID}}">
                </iframe>
                <input type="checkbox" name="videoD[]" value="{{$id->videoID}}" />
            </div>
        @endforeach
    </div>
    <div class="d-flex justify-content-center">
        <input class="btn btn-primary ml-5 " type="submit" name="DeleteVideo" value="Delete Video From List" />
    </div>
</form>
</body>
@endsection
