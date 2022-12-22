@extends('layouts.app')

@section('content')
<div class="heading">
    <h1 class="text-center py-5 color-white">
        Modifica un fumetto:
    </h1>
</div>
<form action="{{route('comics.update', $comic->id)}}" method="post" class="card p-3">
    @csrf
    @method('PUT')
    <div class="mb-3">
        <input type="text" name="title" id="title" class="form-control" value="{{$comic->title}}" aria-describedby="helpId">
    </div>
    <div class="mb-3">
        <div class="mb-3">
            <textarea class="form-control" name="description" id="description" rows="3">{{$comic->description}}</textarea>
        </div>
    </div>
    <div class="mb-3">
        <div class="mb-3">
            <input type="text" name="thumb" id="thumb" class="form-control" value="{{$comic->thumb}}" aria-describedby="helpId">
        </div>
    </div>
    <div class="mb-3">
        <div class="mb-3">
            <input type="text" name="price" id="price" class="form-control" value="{{$comic->price}}" aria-describedby="helpId">
        </div>
    </div>
    <button type="submit" class="btn btn-primary">Invia!</button>
</form>
@endsection