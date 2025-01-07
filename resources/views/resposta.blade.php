<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado do Cálculo</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body class="bg-light">
    <div class="container py-5">
        <h1>Resultados do empréstimo de {{ $nome }}</h1>
        
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Parcela</th>
                    <th>Valor Atualizado (R$)</th>
                    <th>Valor da Parcela (R$)</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($dadosParcelas as $parcela)
                <tr>
                    <td>{{ $parcela['parcela'] }}</td>
                    <td>{{ number_format($parcela['valorAtualizado'], 2, ',', '.') }}</td>
                    <td>{{ number_format($parcela['parcelaValor'], 2, ',', '.') }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
        <p><strong>Total Pago:</strong> R$ {{ number_format($totalPago, 2, ',', '.') }}</p>
        
    </div>
    <div class="text-center mt-4">
    <a href="/" class="btn btn-secondary">Voltar</a>
</div>

</body>
</html>