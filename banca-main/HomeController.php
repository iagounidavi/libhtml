<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('home');
    }

    public function filmes()
    {
        $filmes = [
            'velozes e furiosos 10',
            'carro 3',
            'A Bela e a Fera',
            'Até que a sorte nos separe',
            'todo mundo em panico',
        ];

        return view('filmes', compact('filmes'));
    }

    public function contato()
    {
        return view('contato');
    }

    public function enviarContato(Request $request)
    {
        $dados = $request->all();

        return view('resultado', compact('dados'));
    }
}
?>
