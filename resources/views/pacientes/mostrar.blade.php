
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detalles del paciente</title>
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<style>
    table td, table th {
        border: 1px solid #dee2e6;
        padding: 10px;
    }
    .section-title {
        background-color: #f8f9fa;
        font-weight: bolder;
        padding: 10px;
        text-align: center;
    }
</style>
<body>
    <div class="container bg-light w-75 mt-5 p-4 rounded-3">
        <h1 class="text-uppercase text-center fw-bold pt-2 pb-2">Detalles del paciente</h1>


        <table class="table mt-5">
            <tr>
                <th colspan="2">
                <h2 class="section-title">Datos personales</h2>
                </th>
            </tr>
            <tr>
                <th>ID</th>
                <td>{{ $paciente->id }}</td>
            </tr>
            <tr>
                <th>Tipo de documento</th>
                <td>{{ $paciente->tipoDocumento }}</td>
            </tr>
            <tr>
                <th>Número de documento</th>
                <td>{{ $paciente->numeroDocumento }}</td>
            </tr>
            <tr>
                <th>Nombre</th>
                <td>{{ $paciente->nombre }}</td>
            </tr>
            <tr>
                <th>Apellido</th>
                <td>{{ $paciente->apellido }}</td>
            </tr>
            <tr>
                <th>Teléfono</th>
                <td>{{ $paciente->telefono }}</td>
            </tr>
            <tr>
                <th>Sexo</th>
                <td>{{ $paciente->sexo }}</td>
            </tr>
        </table>

        
        <table class="table mt-5">
            <tr>
                <th colspan="2">
                <h2 class="section-title">Información médica</h2>
                </th>
            </tr>
            <tr>
                <th>Fecha de nacimiento</th>
                <td>{{ $paciente->fechaNacimiento }}</td>
            </tr>
            <tr>
                <th>Edad</th>
                <td>{{ $paciente->edad }}</td>
            </tr>
            <tr>
                <th>Tipo de sangre</th>
                <td>{{ $paciente->tipoSangre }}</td>
            </tr>
            <tr>
                <th>Correo electrónico</th>
                <td>{{ $paciente->correoElectronico }}</td>
            </tr>
            <tr>
                <th>Dirección</th>
                <td>{{ $paciente->direccion }}</td>
            </tr>
            <tr>
                <th>Historia clínica</th>
                <td>{{ $paciente->historiaClinica }}</td>
            </tr>
            <tr>
                <th>Costo de consulta</th>
                <td>{{ $paciente->costoConsulta }}</td>
            </tr>
        </table>

        <div class="d-flex justify-content-center mt-3">
            <a href="{{ route('pacientes.index') }}" class="btn btn-primary text-dark">Volver a la lista</a>
        </div>
    </div>
</body>
</html>
