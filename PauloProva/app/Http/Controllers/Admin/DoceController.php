<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Doce;

class DoceController extends Controller
{
    
    public function index(Request $req)
    {

    

        $doce = Doce::all();
        
        $mensagem =$req->session()->get('mensagem');
        return view('admin.doce.index', compact('doce','mensagem')); 
    }

        public function adicionar()
        {
            return view('admin.doce.adicionar');
        }

        public function salvar(Request $req)
        {
            $doce = $req->all();

            if(isset($doce['publicado'])){

                $doce['publicado']='sim';
            }
            if($req->hasFile('imagem')){
                $doce['imagem']=$this->tratarImagem($req, $doce);
            }

            Doce::create($doce);
            $req->session()
            ->flash(
                'mensagem',
                'Doce adicionado com sucesso'
            );
        return redirect()->route('admin.doce');
        }
        public function editar($id)
        {
            $doce = Doce::find($id);
            return view('admin.doce.editar', compact('doce'));
        }
        public function atualizar(Request $req, $id)
        {
            $doce = $req->all();
            if(isset($doce['publicado'])){
                $doce['publicado']='sim';
            }else{
                $doce['publicado']='não';
            }
            if($req->hasFile('imagem')){
                $doce['imagem']=$this->tratarImagem($req,$doce);
            }

            
            $doceSelecionado = Doce::find($id);
            $doceSelecionado->update($doce);
            $req->session()
            ->flash(
                'mensagem',
                "Doce $doceSelecionado->nome atualizado com sucesso"
            );
            return redirect()->route('admin.doce');
        }
        public function deletar(Request $req, $id)
        {
            $doce = Doce::find($id);
            $doce->delete();

            $req->session()
            ->flash(
                'mensagem',
                "Doce  $doce->nome removido com sucesso" 
            );
            return redirect()->route('admin.doce');
            
        }
        public function tratarImagem(Request $req, $doce)
        {
            $imagem = $req->file('imagem');
            $num = rand(1111, 9999);
            $dir ='img/doce/';
            $ext = $imagem->guessClientExtension();
            $nomeImagem = 'imagem_' . $num . '.' . $ext;
            $imagem->move($dir, $nomeImagem);

            return $dir . $nomeImagem;
        }
        }

