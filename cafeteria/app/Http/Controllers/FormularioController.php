<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormularioController extends Controller
{
    public function processarFormulario(Request $request)
    {
        // Obtendo todos os dados do formulário
        $dados = $request->all();

        // Passando os dados para a view
        return view('resultado', compact('dados'));
    }
}
