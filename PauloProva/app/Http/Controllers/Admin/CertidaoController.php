<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Certidao;
class CertidaoController extends Controller
{
       
    public function index(Request $req)
    {

    

        $certidao = Certidao::all();
        
        $mensagem =$req->session()->get('mensagem');
        return view('admin.certidao.index', compact('certidao','mensagem')); 
    }




    public function adicionar(Request $req)
    {
       
        return view('admin.certidao.adicionar');
    }

    public function salvar(Request $req)
    {
        $certidao = $req->all();

  

        Certidao::create($certidao);
        $req->session()
        ->flash(
            'mensagem',
            'Certidao adicionado com sucesso'
        );
    return redirect()->route('admin.certidao');
    }



    public function editar($id)
    {
        $certidao = Certidao::find($id);
        return view('admin.certidao.editar', compact('certidao'));
    }
    public function atualizar(Request $req, $id)
    {
        $certidao = $req->all();
       
     

          
        $certidaoSelecionado = Certidao::find($id);
        $certidaoSelecionado->update($certidao);
        $req->session()
        ->flash(
            'mensagem',
            "Certidao $certidaoSelecionado->nome atualizado com sucesso"
        );
        return redirect()->route('admin.certidao');
}

public function deletar(Request $req, $id)
{
    $certidao = Certidao::find($id);
    $certidao->delete();

    $req->session()
    ->flash(
        'mensagem',
        "Certidao  $certidao->tipo removido com sucesso" 
    );
    return redirect()->route('admin.certidao');
    
}
}


