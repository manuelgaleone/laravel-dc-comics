@extends ('layouts.app')

@section('content')
<div class="container">
    <div>
        <div class="d-flex flex-wrap">
            @foreach ($comics as $comic)
            <div class="col-2 pb-5">
                <div class="thumb-container">
                    <img src="{{ $comic['thumb'] }}" class="pb-3" alt="{{ $comic['title'] }}">
                    <h6 class="text-center color_white">
                        {{$comic['title']}}
                    </h6>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
@endsection