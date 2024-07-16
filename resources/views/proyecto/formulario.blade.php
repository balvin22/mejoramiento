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
    <h1>Datos del proyecto</h1>

    <form action="{{ route('proyecto.store') }}" method="POST">
        @csrf
        <label for="codigo">codigo:</label>
        <input type="text" name="codigo" id="codigo">

        <label for="descripcion">descripcion:</label>
        <input type="text" name="descripcion" id="descripcion">

        <label for="fechainicio">Fecha de inicio:</label>
        <input type="text" name="fechaInicio" id="fechaInicio">

        <label for="fechafin">Fecha de fin :</label>
        <input type="text" name="fechaFin" id="fechaFin">


        <label for="cliente_id">cliente:</label>
        <select name="cliente_id" id="cliente_id">
            <option value="">Seleccione el cliente</option>
            @foreach($cliente as $cliente)
                <option value="{{ $cliente->id }}">{{ $cliente->codigo }}</option>
            @endforeach
        </select>

        <div class="button-group">
            <button type="submit">Enviar</button>
            <a href="{{ route('proyecto.index') }}">Atrás</a>
        </div>
    </form>
</body>
</html>
