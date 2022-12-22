@extends('layouts.app')

@section('content')
<div class="comic_wrap">
    <div class="comic_elements">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-6 d-flex justify-content-end">
                    <img width="450px" src="{{$comic->thumb}}" alt="{{$comic->title}}">
                </div>
                <div class="col-6 text-white d-flex justify-content-start flex-column px-3">
                    <h1>
                        {{$comic->title}}
                    </h1>
                    <p>
                        {{$comic->description}}
                    </p>
                    <p>
                        <em>
                            {{$comic->price}}
                        </em>
                    </p>
                </div>
            </div>

        </div>
    </div>
</div>
@endsection