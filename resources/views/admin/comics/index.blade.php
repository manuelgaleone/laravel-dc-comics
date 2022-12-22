@extends('layouts.app')

@section('content')
<div class="comics_wrap">
    <div class="comics_elements">
        <table class="table text-white">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">TITLE</th>
                    <th scope="col">DESCRIPTION</th>
                    <th scope="col">THUMB</th>
                    <th scope="col">PRICE</th>
                    <th scope="col">ACTIONS</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($comics as $comic)
                <tr>
                    <th scope="row">{{$comic->id}}</th>
                    <td>{{$comic->title}}</td>
                    <td>{{$comic->description}}</td>
                    <td>
                        <img src="{{$comic->thumb}}" alt="{{$comic->title}}">
                    </td>
                    <td>{{$comic->price}}</td>
                    <td>
                        <a class="btn btn-primary mb-2" href="{{route('comics.show', $comic->id)}}">View</a>
                        <a class="btn btn-secondary mb-2" href='{{route("comics.edit", $comic->id)}}'>Edit</a>
                        <form action="{{route('comics.destroy', $comic->id)}}" method="post">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger mb-2" type="submit">Remove</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection