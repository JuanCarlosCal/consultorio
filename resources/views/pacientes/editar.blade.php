<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Paciente</title>
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<body>
    <div class="container bg-light w-50 mt-5">
        <h1 class="text-uppercase text-center fw-bold pt-2 pb-2 mb-4">Editar Paciente</h1>
                @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form action="{{ route('pacientes.update', $paciente->id) }}" method="POST">

            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="tipoDocumento" class="form-label">Tipo de documento</label>
                <input type="text" class="form-control" id="tipoDocumento" name="tipoDocumento" value="{{ $paciente->tipoDocumento }}" required>
            </div>
            <div class="mb-3">
                <label for="numeroDocumento" class="form-label">Número de documento</label>
                <input type="text" class="form-control" id="numeroDocumento" name="numeroDocumento" value="{{ $paciente->numeroDocumento }}" required>
            </div>

            <div class="mb-3">
                <label for="nombre" class="form-label">Nombre</label>
                <input type="text" class="form-control" id="nombre" name="nombre" value="{{ $paciente->nombre }}" required>
            </div>

            <div class="mb-3">
                <label for="apellido" class="form-label">Apellido</label>
                <input type="text" class="form-control" id="apellido" name="apellido" value="{{ $paciente->apellido }}" required>
            </div>

            <div class="mb-3">
                <label for="telefono" class="form-label">Telefono</label>
                <input type="text" class="form-control" id="telefono" name="telefono" value="{{ $paciente->telefono }}" required>
            </div>

            <div class="mb-3">
                <label for="sexo" class="form-label">Sexo</label>
                <input type="text" class="form-control" id="sexo" name="sexo" value="{{ $paciente->sexo }}" required>
            </div>

            <div class="mb-3">
                <label for="fechaNacimiento" class="form-label">Fecha de Nacimiento</label>
                <input type="date" class="form-control" id="fechaNacimiento" name="fechaNacimiento" value="{{ $paciente->fechaNacimiento }}" required>
            </div>

            <div class="mb-3">
                <label for="edad" class="form-label">Edad</label>
                <input type="text" class="form-control" id="edad" name="edad" value="{{ $paciente->edad }}" required>
            </div>

            <div class="mb-3">
    <label for="tipoSangre" class="form-label">Tipo de Sangre</label>
    <select class="form-control" id="tipoSangre" name="tipoSangre" required>
        <option value="A+" {{ $paciente->tipoSangre == 'A+' ? 'selected' : '' }}>A+</option>
        <option value="A-" {{ $paciente->tipoSangre == 'A-' ? 'selected' : '' }}>A-</option>
        <option value="B+" {{ $paciente->tipoSangre == 'B+' ? 'selected' : '' }}>B+</option>
        <option value="B-" {{ $paciente->tipoSangre == 'B-' ? 'selected' : '' }}>B-</option>
        <option value="AB+" {{ $paciente->tipoSangre == 'AB+' ? 'selected' : '' }}>AB+</option>
        <option value="AB-" {{ $paciente->tipoSangre == 'AB-' ? 'selected' : '' }}>AB-</option>
        <option value="O+" {{ $paciente->tipoSangre == 'O+' ? 'selected' : '' }}>O+</option>
        <option value="O-" {{ $paciente->tipoSangre == 'O-' ? 'selected' : '' }}>O-</option>
    </select>
</div>

            <div class="mb-3">
                <label for="correoElectronico" class="form-label">Correo Electrónico</label>
                <input type="email" class="form-control" id="correoElectronico" name="correoElectronico" value="{{ $paciente->correoElectronico }}" required>
            </div>

            <div class="mb-3">
                <label for="direccion" class="form-label">Dirección</label>
                <input type="text" class="form-control" id="direccion" name="direccion" value="{{ $paciente->direccion }}" required>
            </div>

            <div class="mb-3">
                <label for="historiaClinica" class="form-label">Historia Clínica</label>
                <textarea class="form-control" id="historiaClinica" name="historiaClinica" required>{{ $paciente->historiaClinica }}</textarea>
            </div>

            <div class="mb-3">
                <label for="costoConsulta" class="form-label">Costo de Consulta</label>
                <input type="number" class="form-control" id="costoConsulta" name="costoConsulta" value="{{ $paciente->costoConsulta }}" required>
            </div>
            <div class="d-flex justify-content-center">
            <button type="submit" class="btn btn-primary text-dark fw-semibold">Actualizar Paciente</button>
            </div>
            <div class="d-flex justify-content-center mt-3">
            <a href="{{ route('pacientes.index') }}" class="btn btn-secondary">Cancelar</a>
            </div>
        </form>
    </div>
</body>
</html>
