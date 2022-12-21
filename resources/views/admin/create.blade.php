@extends('layouts.app')

@section('content')
<form action="{{route('comics.store')}}" method="post" class="card p-3">
    @csrf
    <div class="mb-3">
        <input type="text" name="title" id="title" class="form-control" placeholder="Spiderman II" aria-describedby="helpId">
    </div>
    <div class="mb-3">
        <div class="mb-3">
            <textarea class="form-control" name="description" id="description" placeholder="Le straordinarie avventure di Spiderman" rows="3"></textarea>
        </div>
    </div>
    <div class="mb-3">
        <div class="mb-3">
            <input type="text" name="thumb" id="thumb" class="form-control" placeholder="Link dell'Immagine" aria-describedby="helpId">
        </div>
    </div>
    <div class="mb-3">
        <div class="mb-3">
            <input type="text" name="price" id="price" class="form-control" placeholder="29.99usd" aria-describedby="helpId">
        </div>
    </div>
    <button type="submit" class="btn btn-primary">Invia!</button>
</form>
@endsection