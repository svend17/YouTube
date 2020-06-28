@extends('layouts.app')

@section('content')
<body >
<form class="px-5" method="post" action="{{route('upd')}}">
    @csrf
    <div class="vid">
        @foreach($arr as $id)
            <div class="mx-auto">
                <iframe width="480" height="320"
                        src="https://www.youtube.com/embed/{{$id}}">
                </iframe>
                @guest
                @else
                    <input size="20" type="checkbox" name="video[]" value="{{$id}}" />
                @endguest
            </div>
        @endforeach
    </div>
    @guest
    @else
        <input class="btn btn-primary ml-5" type="submit" name="LikedVideo" value="Liked Video List" />
    @endguest
</form>
</body>
@endsection
