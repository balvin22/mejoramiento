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
    <h1>Editar Datos del proyecto</h1>
    <form action="{{ route('proyecto.update', $jugador->id) }}" method="POST">
        @csrf
        @method('PUT')
        <label for="nombre">codigo:</label>
        <input type="text" name="codigo" id="codigo" value="{{ $proyecto->codigo }}">

        <label for="posicion">descripcion:</label>
        <input type="text" name="descripcion" id="descripcion" value="{{ $proyecto->descripcion }}">

        <label for="fechanacimiento">Fecha de inicio:</label>
        <input type="text" name="fechaInicio" id="fechaInicio" value="{{ $proyecto->fechaInicio }}">

        <label for="fechanacimiento">Fecha de fin:</label>
        <input type="text" name="fechaFin" id="fechaFin" value="{{ $proyecto->fechaFin }}">


        <label for="equipo_id">Cliente:</label>
        <select name="cliente_id" id="cliente_id">
            <option value="">Seleccione un equipo</option>
            @foreach($clientes as $cliente )
                <option value="{{ $equipo->id }}" {{ $proyecto->cliente_id == $cliente->id ? 'selected' : '' }}>
                    {{ $cliente->codigo }}
                </option>
            @endforeach
        </select>

        <button type="submit">Actualizar</button>
        <a href="{{ route('proyecto.index') }}">Volver al inicio</a>
    </form>
</body>
</html>



