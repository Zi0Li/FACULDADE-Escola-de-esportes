<?php

namespace App\Http\Controllers;

use App\Models\Basquete;
use App\Models\Futebol;
use App\Models\Natacao;
use App\Models\Vaga;
use App\Models\Volei;
use Illuminate\Http\Request;

class VagasController extends Controller
{
    public function index(){
        $vagas = Vaga::get();

        return view('vagas.index', compact('vagas'));
    }

    public function show($id){
        //$vagas = Vaga::where('id', $id)->first();

        if (!$vagas = Vaga::find($id))
            return redirect()->route('vagas.index');
        elseif ($id == 1){
            $futeboll = Futebol::get();
            return view('vagas.futebol', compact('futeboll'));
        }
        elseif ($id == 2){
            $natacaoo = Natacao::get();
            return view('vagas.futebol', compact('futeboll'));
        } 
        elseif ($id == 3){
            $boleii = Volei::get();
            return view('vagas.futebol', compact('futeboll'));
        }
        elseif ($id == 4){
            $basquetee = Basquete::get();
            return view('vagas.futebol', compact('futeboll'));
        }   
        
    }
}