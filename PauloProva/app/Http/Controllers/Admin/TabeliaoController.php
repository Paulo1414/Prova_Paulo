<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Tabeliao;

class TabeliaoController extends Controller
{
       
    public function index(Request $req)
    {

    

        $tabeliao = Tabeliao::all();
        
        $mensagem =$req->session()->get('mensagem');
        return view('admin.tabeliao.index', compact('tabeliao','mensagem')); 
    }




    public function adicionar()
    {
        return view('admin.tabeliao.adicionar');
    }

    public function salvar(Request $req)
    {
        $tabeliao = $req->all();

  

        Tabeliao::create($tabeliao);
        $req->session()
        ->flash(
            'mensagem',
            'Tabeliao adicionado com sucesso'
        );
    return redirect()->route('admin.tabeliao');
    }



    public function editar($id)
    {
        $tabeliao = Tabeliao::find($id);
        return view('admin.tabeliao.editar', compact('tabeliao'));
    }
    public function atualizar(Request $req, $id)
    {
        $tabeliao = $req->all();
       
        if($req->hasFile('imagem')){
            $tabeliao['imagem']=$this->tratarImagem($req,$tabeliao);
        }

          
        $tabeliaoSelecionado = Tabeliao::find($id);
        $tabeliaoSelecionado->update($tabeliao);
        $req->session()
        ->flash(
            'mensagem',
            "Tabeliao $tabeliaoSelecionado->nome atualizado com sucesso"
        );
        return redirect()->route('admin.tabeliao');
}

public function deletar(Request $req, $id)
{
    $tabeliao = Tabeliao::find($id);
    $tabeliao->delete();

    $req->session()
    ->flash(
        'mensagem',
        "Tabeliao  $tabeliao->nome removido com sucesso" 
    );
    return redirect()->route('admin.tabeliao');
    
}
}
