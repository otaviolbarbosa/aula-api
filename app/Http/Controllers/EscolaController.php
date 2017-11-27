<?php

namespace App\Http\Controllers;

use App\Escola;
use Illuminate\Http\Request;

class EscolaController extends Controller
{
    //
    public function index() {
    	return Escola::paginate(5);
    }

    public function show($id) {
    	return Escola::find($id);
    }

    public function store(Request $request) {
    	$escola = $request->all();
    	Escola::create($escola);

    	return response()->json(['mensagem' => 'Cadastro realizado'], 201);
    }

    public function update($id, Request $request) {
        $escola = Escola::find($id);

        $escola->fill($request->all());

        if($escola->update()) {
            return response()->json(['mensagem' => 'Escola atualizada'], 204);
        } else {
            return response()->json(['error' => 'Escola não atualizada'], 400);
        }
    }

    public function destroy($id, Request $request) {
        $escola = Escola::find($id);
        $escola->delete();

        return response()->json(['mensagem' => 'Escola removida'], 204);
    }

    public function restore($id) {
        //$escola = Escola::withTrashed()->find($id)->restore();

        return response()->json(['mensagem' => 'Escola restaurada das cinzas'], 204);
    }
}
