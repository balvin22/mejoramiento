<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Jugadores</title>
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
        .btn-primary {
            background-color: #007bff;
            color: white;
            padding: 10px 15px;
            text-decoration: none;
            border-radius: 5px;
            margin-bottom: 20px;
            display: inline-block;
        }
        .btn-primary:hover {
            background-color: #0056b3;
        }
        .jugador-item {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 5px;
            background-color: #fff;
            margin-bottom: 10px;
        }
        .jugador-info {
            flex: 1;
            margin-right: 20px;
        }
        .jugador-actions {
            display: flex;
            gap: 10px;
        }
        .jugador-item a {
            color: #007bff;
            text-decoration: none;
        }
        .jugador-item a:hover {
            text-decoration: underline;
        }
        .btn-warning, .btn-danger {
            padding: 5px 10px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            color: white;
            text-decoration: none;
        }
        .btn-warning {
            background-color: #ffc107;
        }
        .btn-warning:hover {
            background-color: #e0a800;
        }
        .btn-danger {
            background-color: #dc3545;
        }
        .btn-danger:hover {
            background-color: #c82333;
        }
        form {
            margin: 0;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Proyectos registrados</h1>
        <a href="{{ route('taller') }}" class="btn-primary">atras</a>
        <a href="{{ route('proyecto.store') }}" class="btn-primary">Ingresar nuevo proyecto</a>
        <ul class="list-unstyled">
            @foreach ($proyecto as $proyecto)
                <li class="jugador-item">
                    <div class="jugador-info">
                        <a href="{{ route('proyecto.show', $proyecto->id) }}">{{ $proyecto->codigo }}</a>
                    </div>
                    <div class="jugador-actions">
                        <a href="{{ route('proyecto.edit', $proyecto->id) }}" class="btn-warning">Editar</a>
                        <form action="{{ route('proyecto.destroy', $proyecto->id) }}" method="POST" style="display:inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn-danger">Eliminar</button>
                        </form>
                    </div>
                </li>
            @endforeach
        </ul>
    </div>
</body>
</html>
