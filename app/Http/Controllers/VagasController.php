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

    public function editFutebol($id){
        if (!$futebol = Futebol::find($id))
            return redirect()->route('vagas.futebol');
        return view('edit.futebol', compact('futebol'));
    }

    public function updateFutebol(Request $request, $id){
        if (!$futebol = Futebol::find($id))
            return redirect()->route('vagas.futebol');
        $futebol->update($request->all());
        return redirect()->route('vagas.show', 1);
    }
    
    public function editNatacao($id){
        if (!$natacao = Natacao::find($id))
            return redirect()->route('vagas.natacao');
        return view('edit.natacao', compact('natacao'));
    }

    public function updateNatacao(Request $request, $id){
        if (!$natacao = Natacao::find($id))
            return redirect()->route('vagas.natacao');
        $natacao->update($request->all());
        return redirect()->route('vagas.show', 2);
    }
    
    public function editVolei($id){
        if (!$volei = Volei::find($id))
            return redirect()->route('vagas.volei');
        return view('edit.volei', compact('volei'));
    }

    public function updateVolei(Request $request, $id){
        if (!$volei = Volei::find($id))
            return redirect()->route('vagas.volei');
        $volei->update($request->all());
        return redirect()->route('vagas.show', 3);
    }
    public function editBasquete($id){
        if (!$basquete = Basquete::find($id))
            return redirect()->route('vagas.basquete');
        return view('edit.basquete', compact('basquete'));
    }

    public function updateBasquete(Request $request, $id){
        if (!$basquete = Basquete::find($id))
            return redirect()->route('vagas.basquete');
        $basquete->update($request->all());
        return redirect()->route('vagas.show', 4);
    }

    public function deleteFutebol($id){
        if (!$futebol = Futebol::find($id))
            return redirect()->route('vagas.futebol');
        $Vagas = Vaga::find(1);
        $Vagas->vaga = $Vagas->vaga + 1;
        $Vagas->save();
        $futebol->delete();
        return redirect()->route('vagas.show', 1);
    }

    public function deleteNatacao($id){
        if (!$natacao = Natacao::find($id))
            return redirect()->route('vagas.natacao');
        $Vagas = Vaga::find(2);
        $Vagas->vaga = $Vagas->vaga + 1;
        $Vagas->save();
        $natacao->delete();
        return redirect()->route('vagas.show', 2);
    }

    public function deleteVolei($id){
        if (!$Volei = Volei::find($id))
            return redirect()->route('vagas.Volei');
        $Vagas = Vaga::find(3);
        $Vagas->vaga = $Vagas->vaga + 1;
        $Vagas->save();
        $Volei->delete();
        return redirect()->route('vagas.show', 3);
    }

    public function deleteBasquete($id){
        if (!$Basquete = Basquete::find($id))
            return redirect()->route('vagas.Basquete');
        $Vagas = Vaga::find(4);
        $Vagas->vaga = $Vagas->vaga + 1;
        $Vagas->save();
        $Basquete->delete();
        return redirect()->route('vagas.show', 4);
    }

}