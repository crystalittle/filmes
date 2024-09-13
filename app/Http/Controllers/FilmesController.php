<?php

namespace App\Http\Controllers;

use App\Models\Filmes;
use Illuminate\Http\Request;

class FilmesController extends Controller
{
    public function index(){
        $dados = Filmes::all();
        return view('filmes.index', [
            'filmes' => $dados,
        ]);
    }
 
    public function cadastrar(){
        return view('filmes.cadastrar');
    }

    public function gravar(Request $form){ //quando acessar animais cadastrar via post, submentendo o form
        $dados = $form->validate([
            'nome' => 'required|min:3',
            'sinopse' => 'required',
            'ano' => 'required',
            'categoria' => 'required',
            'link' => 'required',
        ]);    

        Filmes::create($dados);
        
        return redirect()->route('filmes');
   }

    public function apagar(Filmes $filme){
        return view('filmes.apagar', [
            'filme' => $filme,
        ]);
    }


   public function editar(Filmes $filme) {
    return view('filmes/editar', ['filme' => $filme]);
   }

   public function editarGravar(Request $form, Filmes $filme)
   {
    $dados = $form->validate([
    'nome' => 'required|max:255',
    'sinopse' => 'required|max:225',
    'ano' => '',
    'categoria' => '',
    'link' => '',
    ]);

    $filme->fill($dados);
    $filme->save();
    return redirect() -> route('filmes');


    }    
    public function deletar(Filmes $filme){
        $filme -> delete();
        return redirect() -> route('filmes');
     }
     
}

