<?php

namespace App\Http\Controllers;

use App\Models\Vaga;
use Illuminate\Http\Request;

class VagasController extends Controller
{
    public function index(){
        $vagas = Vaga::get();

        return view('vagas.index', compact('vagas'));
    }

    public function show($id){
        return view('vagas.show');
    }
}