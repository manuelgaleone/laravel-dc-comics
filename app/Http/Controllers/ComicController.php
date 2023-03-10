<?php

namespace App\Http\Controllers;

use App\Models\Comic;
use Illuminate\Http\Request;
use App\Http\Requests\StoreComicRequest;
use App\Http\Requests\UpdateComicRequest;

class ComicController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $comics = Comic::all();
        return view('admin.comics.index', compact('comics'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.comics.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreComicRequest $request)
    {

        // Validation
        $val_data = $request->validated();

        // Saving
        $comic = Comic::create($val_data);

        /* $val_data = $request->validate([
            'title' => 'required|min:10|max:100',
            'description' => 'max:255',
            'thumb' => 'required'
        ]); */

        /* $new_comic = new Comic();
        $new_comic->title = $request['title'];
        $new_comic->description = $request['description'];
        $new_comic->thumb = $request['thumb'];
        $new_comic->price = $request['price'];
        $new_comic->series = $request['series'];
        $new_comic->sale_date = $request['sale_date'];
        $new_comic->type = $request['type'];
        $new_comic->save(); */

        return to_route('comics.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Comic $comic)
    {
        return view('admin.comics.show', compact('comic'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Comic $comic)
    {
        return view('admin.comics.edit', compact('comic'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int 
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateComicRequest $request, Comic $comic)
    {

        $val_data = $request->validated();

        $comic->update($val_data);

        /* $data = [
            'title' => $request['title'],
            'thumb' => $request['thumb'],
            'description' => $request['description'],
            'price' => $request['price']
        ];

        $comic->update($data); */

        // return redirect()->route('comics.index');
        return to_route('comics.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Comic $comic)
    {
        $comic->delete();

        return redirect()->route('comics.index');
    }
}
