<?php

namespace App\Http\Controllers;

use App\Models\Album;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\View\View;

class AlbumController extends Controller
{
    public function index()
    {
        $albums = Album::with('faixas')->get();
        // foreach($faixas as $faixa){
        //     $faixa->album = Album::find($faixa->album_id);
        // }
        return response()->json($albums);
    }

    public function show() : View
    {
        $albums = Album::all();
        return view('album', ['albums'=>$albums]);;
    }

    public function search($query)
    {
        $albums = Album::where('nome','LIKE',"%$query%")->get();
        return response()->json($albums);
    }
    public function create(Request $request)
    {
        $album = Album::create([
            'nome' => $request->input('nome'),
            'artista' => $request->input('artista'),
            'ano' => $request->input('ano'),
            'duracao' => $request->input('duracao'),
            'idioma' => $request->input('idioma'),
        ]);

        return view('album', $album);
        // return response()->json(($album));
    }

    public function edit($id)
    {
        $album = Album::find($id);
        return response()->json(($album));
    }

    public function update(Request $request)
    {
        $album = Album::findOrFail($request->input('id'));

        if ($album === null) {
            return response(
                "Album com id {$request->id} não encontrado",
                Response::HTTP_NOT_FOUND
            );
        }

        $album->update([
            'nome' => $request->input('nome'),
            'artista' => $request->input('artista'),
            'ano' => $request->input('ano'),
            'duracao' => $request->input('duracao'),
            'idioma' => $request->input('idioma'),
        ]);

        return response()->json(($album));
    }

    public function delete($id) {
        $album = Album::findOrFail($id);

        if ($album === null) {
            return response(
                "Album com id {$id} não encontrado",
                Response::HTTP_NOT_FOUND
            );
        }

        $album->delete();
        return response()->json($album);
    }
}
