<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de pacientes</title>
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<style>
        table td, table th {
            border: 1px solid #dee2e6;
        }
 </style>
<body>
    <div class="container bg-light w-75 mt-5 rounded-1">
        <h1 class="text-uppercase text-center fw-bold pt-2 pb-2">Lista de pacientes</h1>
        @foreach($pacientes as $paciente)
        <table class="table">
        <tr>
            <td class="text-uppercase fw-bold">ID</td>
            <td class="text-uppercase fw-bold">Numero de documento</td>
            <td class="text-uppercase fw-bold">Nombre</td>
            <td class="text-uppercase fw-bold">Apellido</td>
            <td class="text-uppercase fw-bold">Telefono</td>
            <td class="text-uppercase fw-bold">Created_at</td>
            <td class="text-uppercase fw-bold">Updated_at</td>

        </tr>
        <tr>
            <td>{{ $paciente->id }}</td>
            <td>{{ $paciente->numeroDocumento }}</td>
            <td>{{ $paciente->nombre }}</td>
            <td>{{ $paciente->apellido }}</td>
            <td>{{ $paciente->telefono }}</td>
            <td>{{ $paciente->created_at }}</td>
            <td>{{ $paciente->updated_at }}</td>
            <td><a href="{{ route('pacientes.edit', $paciente->id) }}">Editar</a></td>
            <td><a href="{{ route('pacientes.show', $paciente->id) }}">Mostrar</a></td>
            <td>
                    <form action="{{ route('pacientes.destroy', $paciente->id) }}" method="POST" onsubmit="return confirm('¿Estás seguro de que deseas eliminar este paciente?');">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger text-black fw-semibold">Eliminar</button>
                    </form>
            </td>
        </tr>
        </table>
        @endforeach
    </div>

    <div class="container w-75 bg-light mt-5 p-2">
        <div class="d-flex justify-content-center">
        <a href="{{ route('pacientes.create') }}" class="btn btn-primary text-black fw-semibold">Agregar Programa</a>
        </div>
    </div>
    
</body>
</html>