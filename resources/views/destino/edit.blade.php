<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Editar jugador</title>
    <style>
        body {
            padding: 20px;
            background-color: #f0f2f5;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
        h1 {
            text-align: center;
            margin-bottom: 20px;
            color: #333;
        }
        form {
            background-color: #fff;
            padding: 20px;
            border: 1px solid #ddd;
            border-radius: 8px;
            max-width: 600px;
            margin: 0 auto;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }
        label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
            color: #555;
        }
        input[type="text"],
        select {
            width: calc(100% - 16px);
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ddd;
            border-radius: 5px;
            box-sizing: border-box;
        }
        select {
            appearance: none;
            background-color: #fff;
            cursor: pointer;
        }
        button {
            background-color: #007bff;
            color: white;
            padding: 10px 15px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
            width: 100%;
        }
        button:hover {
            background-color: #0056b3;
        }
        a {
            display: block;
            text-align: center;
            margin-top: 15px;
            color: #007bff;
            text-decoration: none;
        }
        a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <h1>Editar Datos del destino</h1>
    <form action="{{ route('destino.update', $destino->id) }}" method="POST">
        @csrf
        @method('PUT')
        <label for="codigo">codigo:</label>
        <input type="text" name="codigo" id="codigo" value="{{ $destino->codigo}}">

        <label for="nombre">nombre:</label>
        <input type="text" name="nombre" id="nombre" value="{{ $destino->nombre}}">

        <label for="otrosDatos">otros Datos:</label>
        <input type="text" name="otrosDatos" id="otrosDatos" value="{{ $destino->otrosDatos }}">


        <button type="submit">Actualizar</button>
        <a href="{{ route('destino.index') }}">Volver al inicio</a>
    </form>
</body>
</html>


