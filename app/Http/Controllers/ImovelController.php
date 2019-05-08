<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Imovel;

class ImovelController extends Controller
{
    public function index(){
        $imoveis = Imovel::all();
        $total = Imovel::all()->count();
        return view('list-imoveis', compact('imoveis','total'));
    }
    public function create(){
        return view ('include-imovel');
    }
    public function store(Request $request){
        $imovel = new Imovel;
        $imovel->tipo = $request->tipo;
        $imovel->pretensao = $request->pretensao;
        $imovel->titulo= $request->titulo;
        $imovel->detalhes = $request->detalhes;
        $imovel->quartos = $request->quartos;
        $imovel->valor = $request->valor;
        $imovel->save();
        return redirect()->route('imovel.index')->with('message','Imovel criado com sucesso!');
    }
    public function show($id){

    }
    public function edit($id){
        $imovel = Imovel::findOrFail($id);
        return view('alter-imovel',compact('imovel'));
    }
    public function update(Request $request, $id){
        $product = Imovel::findOrFail($id);
        $imovel->tipo = $request->tipo;
        $imovel->pretensao = $request->pretensao;
        $imovel->titulo= $request->titulo;
        $imovel->detalhes = $request->detalhes;
        $imovel->quartos = $request->quartos;
        $imovel->valor = $request->valor;
        $imovel->save();
        return redirect()->route('imovel.index')->with('message','Imovel alterado com sucesso!');
    }
    public function destroy($id){
        $imovel = Imovel::findOrFail($id);
        $imovel->delete();
        return redirect()->route('imovel.index')->with('message','Imovel excluido com sucesso!');
    }

}
