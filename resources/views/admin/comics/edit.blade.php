@extends('layouts.app')

@section('content')
<div class="heading">
    <h1 class="text-center py-5 color-white">
        Modifica un fumetto:
    </h1>
</div>
@if ($errors->any())
<div class="alert alert-danger">
    <ul>
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif
<form action="{{route('comics.update', $comic->id)}}" method="post" class="card p-3">
    @csrf
    {{ method_field('put') }}
    <div class="mb-3">
        <input type="text" name="title" id="title" class="form-control" value="{{$comic->title}}" placeholder="Spiderman II" aria-describedby="helpId" required>
    </div>
    <div class="mb-3">
        <div class="mb-3">
            <textarea class="form-control" name="description" id="description" placeholder="Le straordinarie avventure di Spiderman" rows="3" required>{{$comic->description}}</textarea>
        </div>
    </div>
    <div class="mb-3">
        <div class="mb-3">
            <input type="text" name="thumb" value="{{$comic->thumb}}" id="thumb" class="form-control" placeholder="Link dell'Immagine" aria-describedby="helpId" required>
        </div>
    </div>
    <div class="mb-3">
        <div class="mb-3">
            <input type="text" value="{{$comic->price}}" name="price" id="price" class="form-control" placeholder="29.99usd" aria-describedby="helpId" required>
        </div>
    </div>
    <div class="mb-3">
        <div class="mb-3">
            <input type="text" value="{{$comic->series}}" name="series" id="series" class="form-control" placeholder="Serie 1" aria-describedby="helpId" required>
        </div>
    </div>
    <div class="mb-3">
        <div class="mb-3">
            <input type="text" value="{{$comic->sale_date}}" name="sale_date" id="sale_date" class="form-control" placeholder="2018-04-12" aria-describedby="helpId" required>
        </div>
    </div>
    <div class="mb-3">
        <div class="mb-3">
            <input type="text" value="{{$comic->type}}" name="type" id="type" class="form-control" placeholder="Fumetto" aria-describedby="helpId" required>
        </div>
    </div>
    <button type="submit" class="btn btn-primary">Invia!</button>
</form>
@endsection