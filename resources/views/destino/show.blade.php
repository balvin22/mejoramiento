<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <style>
        body {
            padding: 20px;
            background-color: #f8f9fa;
            font-family: Arial, sans-serif;
        }
        h1 {
            margin-bottom: 20px;
            color: #333;
        }
        p {
            margin-bottom: 10px;
            color: #555;
        }
        a {
            display: inline-block;
            margin-top: 20px;
            color: #007bff;
            text-decoration: none;
            padding: 10px 15px;
            border: 1px solid #007bff;
            border-radius: 5px;
        }
        a:hover {
            background-color: #007bff;
            color: white;
        }
    </style>
</head>
<body>
    <h1>Detalles del destino</h1>
    <p>codigo: {{ $destino->codigo }}</p>
    <p>nombre: {{ $destino->nombre }}</p>
    <p>otros Datos: {{ $destino->otrosDatos }}</p>
    <a href="{{ route('destino.index') }}">Volver al inicio</a>
</body>
</html>

