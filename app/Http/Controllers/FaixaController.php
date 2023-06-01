<?php

namespace App\Http\Controllers;

use App\Models\Album;
use App\Models\Faixa;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\View\View;

class FaixaController extends Controller
{
    public function index()
    {
        $faixas = Faixa::with('Album')->get();
        // foreach($faixas as $faixa){
        //     $faixa->album = Album::find($faixa->album_id);
        // }
        return response()->json($faixas);
    }

    public function show() : View
    {
        $faixas = Faixa::with('Album')->get();
        // foreach($faixas as $faixa){
        //     $faixa->album = Album::find($faixas->album_id);
        // }
        return view('welcome', ['faixas'=>$faixas]);;
    }

    public function search($query)
    {

        $faixas = Faixa::where('nome','LIKE',"%$query%")->get();
        return response()->json($faixas);
    }

    public function create(Request $request)
    {
        $faixa = Faixa::create([
            'nome' => $request->input('nome'),
            'album_id' => $request->input('album_id'),
            'compositores' => $request->input('compositores'),
            'duracao' => $request->input('duracao'),
            'ordem' => $request->input('ordem'),
        ]);

        return response()->json(($faixa));
    }

    public function edit($id)
    {
        $faixa = Faixa::find($id);
        return response()->json(($faixa));
    }

    public function update(Request $request)
    {
        $faixa = Faixa::findOrFail($request->input('id'));

        if ($faixa === null) {
            return response(
                "Faixa com id {$request->id} não encontrada",
                Response::HTTP_NOT_FOUND
            );
        }

        $faixa->update([
            'nome' => $request->input('nome'),
            'album_id' => $request->input('album_id'),
            'compositores' => $request->input('compositores'),
            'duracao' => $request->input('duracao'),
            'ordem' => $request->input('ordem'),
        ]);

        return response()->json(($faixa));
    }

    public function delete($id) {
        $faixa = Faixa::findOrFail($id);

        if ($faixa === null) {
            return response(
                "Faixa com id {$id} não encontrada",
                Response::HTTP_NOT_FOUND
            );
        }


        $faixa->delete();
        return response()->json($faixa);
    }
}
