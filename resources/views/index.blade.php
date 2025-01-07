<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora de Juros </title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body class="bg-light">
    <div class="container py-5">
        <h2 class="text-center mb-4">Calculadora de Juros</h2>
        <img src="" alt="">
        <form action="/calcular" method="POST" class="card p-4 shadow-sm">
            @csrf
            <div class="mb-3">
                <label for="nome" class="form-label">Seu Nome</label>
                <input type="text" class="form-control" id="nome" name="nome" required>
            </div>
            <div class="mb-3">
                <label for="valor" class="form-label">Capital Inicial (R$)</label>
                <input type="number" class="form-control" id="valor" name="valor" required>
            </div>
            <div class="mb-3">
                <label for="taxa" class="form-label">Taxa de Juros (%)</label>
                <input type="number" class="form-control" id="taxa" name="taxa" step="0.01" required>
            </div>
            <div class="mb-3">
                <label for="parcelas" class="form-label">Tempo</label>
                <input type="number" class="form-control" id="parcelas" name="parcelas" required>
            </div>
            <button type="submit" class="btn btn-primary">Calcular</button>
        </form>
    </div>
</body>
</html>