<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Contrato;

class ContratoController extends Controller
{
       
    public function index(Request $req)
    {

    

        $contrato = Contrato::all();
        
        $mensagem =$req->session()->get('mensagem');
        return view('admin.contrato.index', compact('contrato','mensagem')); 
    }




    public function adicionar()
    {
        return view('admin.contrato.adicionar');
    }

    public function salvar(Request $req)
    {
        $contrato= $req->all();

  

        Contrato::create($contrato);
        $req->session()
        ->flash(
            'mensagem',
            'Contrato adicionado com sucesso'
        );
    return redirect()->route('admin.contrato');
    }



    public function editar($id)
    {
        $contrato = Contrato::find($id);
        return view('admin.contrato.editar', compact('contrato'));
    }
    public function atualizar(Request $req, $id)
    {
        $contrato = $req->all();
       
     

          
        $contratoSelecionado = Contrato::find($id);
        $contratoSelecionado->update($contrato);
        $req->session()
        ->flash(
            'mensagem',
            "Contrato $contratoSelecionado->nome atualizado com sucesso"
        );
        return redirect()->route('admin.contrato');
}

public function deletar(Request $req, $id)
{
    $contrato = Contrato::find($id);
    $contrato->delete();

    $req->session()
    ->flash(
        'mensagem',
        "Contrato  $contrato->nome removido com sucesso" 
    );
    return redirect()->route('admin.contrato');
    
}
}
