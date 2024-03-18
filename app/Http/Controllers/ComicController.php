<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comic;

class ComicController extends Controller
{
    public function index()
    {
        $comics = Comic::all();

        return view('comics.index', compact('comics'));
    }

    public function show(Comic $comic)
    {
        return view('comics.show', compact('comic'));
    }

    public function create()
    {
        return view('comics.create');
    }

    public function store(Request $request)
    {
        $data = $request->all();

        $comic = new Comic();
        $comic->fill($data);
        

        return to_route('comics.show', $comic);
    }

    public function edit(Comic $comic)
    {
        return view('comics.edit', compact('comic'));
    }

    public function update(Request $request, Comic $comic)
    {
        $data = $request->all();

        $comic->update($data);
        // $comic->fill($data);
        // $comic->save();

        return to_route('comics.show', $comic->id);
    }

    public function destroy(Comic $comic)
    {
        $comic->comic();

        return to_route('comics.index');
    }
}
