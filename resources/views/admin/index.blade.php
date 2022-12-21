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
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection