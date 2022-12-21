@extends('layouts.app')

@section('content')
<div class="comic_wrap">
    <div class="comic_elements">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-6">
                    <img src="{{$comic->thumb}}" alt="{{$comic->title}}">
                </div>
                <div class="col-6">
                    {{$comic->title}}
                </div>
            </div>

        </div>
    </div>
</div>
@endsection