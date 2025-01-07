<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class controllerCalculo extends Controller
{
    public function Calcular(Request $request)
    {
        $nome = $request->input('nome');
        $capitalinicial = $request->input('valor');
        $taxaJuros = $request->input('taxa') / 100;
        $quantidadeParcelas = $request->input('parcelas');

        $dadosParcelas = [];
        $valorRestante = $capitalinicial;
        $totalPago = 0;

        for ($i = 1; $i <= $quantidadeParcelas; $i++) {
            $valorComJuros = $valorRestante * (1 + $taxaJuros);
            $parcela = $valorComJuros / $quantidadeParcelas;
            $totalPago += $parcela;

            $dadosParcelas[] = [
                'parcela' => $i,
                'valorAtualizado' => round($valorComJuros, 2),
                'parcelaValor' => round($parcela, 2),
            ];

            $valorRestante = $valorComJuros - $parcela;
        }

        return view('resposta', [
            'nome' => $nome,
            'dadosParcelas' => $dadosParcelas,
            'totalPago' => round($totalPago, 2),
        ]);
    }
}