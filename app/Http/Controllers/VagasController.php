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

        if (!$vagas = Vaga::find($id))
            return redirect()->route('vagas.index');
        elseif ($id == 1){
            $futeboll = Futebol::get();
            return view('vagas.futebol', compact('futeboll'));
        }
        elseif ($id == 2){
            $natacaoo = Natacao::get();
            return view('vagas.natacao', compact('natacaoo'));
        } 
        elseif ($id == 3){
            $voleii = Volei::get();
            return view('vagas.volei', compact('voleii'));
        }
        elseif ($id == 4){
            $basquetee = Basquete::get();
            return view('vagas.basquete', compact('basquetee'));
            
        }      
    }

    public function create($id){

        if (!$vagas = Vaga::find($id))
            return redirect()->route('vagas.index');
        elseif ($id == 1){
            $futeboll = Futebol::get();
            return view('vagas.createFutebol');
        }
        elseif ($id == 2){
            $natacaoo = Natacao::get();
            return view('vagas.createNatacao', compact('natacaoo'));
        } 
        elseif ($id == 3){
            $voleii = Volei::get();
            return view('vagas.createVolei', compact('voleii'));
        }
        elseif ($id == 4){
            $basquetee = Basquete::get();
            return view('vagas.createBasquete', compact('basquetee'));
            
        }      
    }

    public function storeFutebol(Request $request){
        Futebol::create($request->all());
        $Vagas = Vaga::find(1);
        $Vagas->vaga = $Vagas->vaga - 1;
        $Vagas->save();
        return redirect()->route('vagas.index');
    }

    public function storeNatacao(Request $request){
        Natacao::create($request->all());
        $Vagas = Vaga::find(2);
        $Vagas->vaga = $Vagas->vaga - 1;
        $Vagas->save();
        return redirect()->route('vagas.index');
    }

    public function storeVolei(Request $request){
        Volei::create($request->all());
        $Vagas = Vaga::find(3);
        $Vagas->vaga = $Vagas->vaga - 1;
        $Vagas->save();
        return redirect()->route('vagas.index');
    }

    public function storeBasquete(Request $request){
        Basquete::create($request->all());
        $Vagas = Vaga::find(4);
        $Vagas->vaga = $Vagas->vaga - 1;
        $Vagas->save();
        return redirect()->route('vagas.index');
    }
}