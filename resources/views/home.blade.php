@extends ('layouts.app')

@section('main-content')
<div class="container">
    <nav>
        <ul class="d-flex flex-wrap">
            @foreach ($comics as $comic)
            <li class="col-2 pb-5">

                <div class="thumb-container">
                    <img src="{{ $comic['thumb'] }}" class="pb-3" alt="{{ $comic['title'] }}">
                    <h6 class="text-center color_white">
                        {{$comic['title']}}
                    </h6>
                </div>
            </li>
            @endforeach
        </ul>
    </nav>
</div>
@endsection