<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Interessado;

class InteressadoController extends Controller
{
    public function index(){
        $interessados = Interessado::all();
        $total = Interessado::all()->count();
        return view('list-interessados', compact('interessados','total'));
    }
    public function create(){
        return view ('include-interessado');
    }
    public function store(Request $request){
        $interessado = new Interessado;
        $interessado->nome = $request->nome;
        $interessado->email = $request->email;
        $interessado->save();
        return redirect()->route('interessado.index')->with('message','Interessado criado com sucesso!');
    }
    public function show($id){

    }
    public function edit($id){
        $interessado = Interessado::findOrFail($id);
        return view('alter-interessado',compact('interessado'));
    }
    public function update(Request $request, $id){
        $interessado = Interessado::findOrFail($id);
        $interessado->nome = $request->nome;
        $interessado->email = $request->email;
        $interessado->save();
        return redirect()->route('interessado.index')->with('message','Interessado alterado com sucesso!');
    }
    public function destroy($id){
        $interessado = Interessado::findOrFail($id);
        $interessado->delete();
        return redirect()->route('interessado.index')->with('message','Interessado excluido com sucesso!');
    }
}