<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ingresar Jugador</title>
    <style>
        body {
            padding: 20px;
            background-color: #f8f9fa;
            font-family: Arial, sans-serif;
        }
        h1 {
            margin-bottom: 20px;
            color: #333;
            text-align: center;
        }
        form {
            background-color: #fff;
            padding: 20px;
            border: 1px solid #ddd;
            border-radius: 5px;
            max-width: 500px;
            margin: 0 auto;
        }
        label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
            color: #555;
        }
        input[type="text"],
        select {
            width: 100%;
            padding: 8px;
            margin-bottom: 15px;
            border: 1px solid #ddd;
            border-radius: 5px;
        }
        .button-group {
            display: flex;
            justify-content: space-between;
        }
        .button-group button,
        .button-group a {
            background-color: #007bff;
            color: white;
            padding: 10px 15px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            text-decoration: none;
            text-align: center;
        }
        .button-group button:hover,
        .button-group a:hover {
            background-color: #0056b3;
        }
        .button-group a {
            display: inline-block;
            padding: 10px 15px;
            text-decoration: none;
        }
    </style>
</head>
<body>
    <h1>Datos del destino</h1>

    <form action="{{ route('destino.store') }}" method="POST">
        @csrf
        <label for="codigo">codigo:</label>
        <input type="text" name="codigo" id="codigo">

        <label for="nombre">nombre:</label>
        <input type="text" name="nombre" id="nombre">

        <label for="otrosDatos">otros datos:</label>
        <input type="text" name="otrosDatos" id="otrosDatos">

        <div class="button-group">
            <button type="submit">Enviar</button>
            <a href="{{ route('destino.index') }}">Atrás</a>
        </div>
    </form>
</body>
</html>
