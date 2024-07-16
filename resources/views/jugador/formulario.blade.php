
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
    <h1>Datos del Jugador</h1>

    <form action="{{ route('jugador.store') }}" method="POST">
        @csrf
        <label for="nombre">Nombre:</label>
        <input type="text" name="nombre" id="nombre">

        <label for="posicion">Posición:</label>
        <input type="text" name="posicion" id="posicion">

        <label for="fechanacimiento">Fecha de Nacimiento:</label>
        <input type="text" name="fechanacimiento" id="fechanacimiento">

        <label for="equipo_id">Equipo:</label>
        <select name="equipo_id" id="equipo_id">
            <option value="">Seleccione un equipo</option>
            @foreach($equipos as $equipo)
                <option value="{{ $equipo->id }}">{{ $equipo->nombre }}</option>
            @endforeach
        </select>

        <div class="button-group">
            <button type="submit">Enviar</button>
            <a href="{{ route('jugador.index') }}">Atrás</a>
        </div>
    </form>
</body>
</html>
