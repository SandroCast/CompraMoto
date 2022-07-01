<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Historico;


class CompraController extends Controller
{
    public function index()
    {
        $historicos = Historico::all();

        return view('index',compact('historicos'));

    }

    public function historico()
    {
        $historicos = Historico::all();

        return view('historico',compact('historicos'));

    }

    public function administrador()
    {

        return view('administrador');
    }

    public function novo()
    {



        return view('novo');
    }

    public function salvar(Request $request)
    {
        $imagem = $request->image;
        $extension = $imagem->extension();
        $imageName = strtotime('now') . '.' . $extension;
        $imagem->move(public_path('img'), $imageName);

        $novo = new Historico;
        $novo->valor = $request->valor;
        $novo->foto = $imageName;
        $novo->save();

        return redirect('/administrador/AmAtOrY/sandrocastro/pagamentos');

    }

    

    public function pagamentos()
    {
        $pagamentos = Historico::all();

        return view('pagamentos',compact('pagamentos'));

    }







}
