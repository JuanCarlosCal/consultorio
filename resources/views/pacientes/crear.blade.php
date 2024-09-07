<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrar pacientes</title>
    @vite(['resources/sass/app.scss', 'resources/js/app.js']);
</head>
<body>
    <div class="container bg-light border border-dark p-5 my-5 w-75 rounded-1">
        <form action="{{ route('pacientes.store') }}" method="POST">
            <h1 class="text-uppercase fw-bold pb-3 text-center">Registrar pacientes</h1>
            @csrf
            @method('POST')
            
            <div class="row">
                <div class="col-md-4">
                    <label for="tipoDocumento">Tipo de Documento:</label>
                    <select id="tipoDocumento" name="tipoDocumento" class="form-select" required>
                        <option value="CC">Cédula de Ciudadanía (CC)</option>
                        <option value="TI">Tarjeta de Identidad (TI)</option>
                        <option value="CE">Cédula de Extranjería (CE)</option>
                        <option value="PA">Pasaporte (PA)</option>
                        <option value="RC">Registro Civil (RC)</option>
                    </select><br>

                    <label for="nombre">Nombre:</label>
                    <input type="text" id="nombre" name="nombre" class="form-control" required><br>

                    <label for="sexo">Sexo:</label>
                    <select id="sexo" name="sexo" class="form-select" required>
                        <option value="Masculino">Masculino</option>
                        <option value="Femenino">Femenino</option>
                        <option value="Otro">Otro</option>
                    </select><br>

                    <label for="edad">Edad:</label>
                    <input type="number" id="edad" name="edad" class="form-control" required><br>
                </div>

                <div class="col-md-4">
                    <label for="numeroDocumento">Número de Documento:</label>
                    <input type="text" id="numeroDocumento" name="numeroDocumento" class="form-control" required><br>

                    <label for="apellido">Apellido:</label>
                    <input type="text" id="apellido" name="apellido" class="form-control" required><br>

                    <label for="fechaNacimiento">Fecha de Nacimiento:</label>
                    <input type="date" id="fechaNacimiento" name="fechaNacimiento" class="form-control" required><br>

                    <label for="telefono">Teléfono:</label>
                    <input type="tel" id="telefono" name="telefono" class="form-control" required><br>
                </div>

                <div class="col-md-4">
                    <label for="tipoSangre">Tipo de Sangre</label>
                    <select id="tipoSangre" name="tipoSangre" class="form-select" required>
                        <option value="" disabled selected>Selecciona tu tipo de sangre</option>
                        <option value="A+">A+</option>
                        <option value="A-">A-</option>
                        <option value="B+">B+</option>
                        <option value="B-">B-</option>
                        <option value="AB+">AB+</option>
                        <option value="AB-">AB-</option>
                        <option value="O+">O+</option>
                        <option value="O-">O-</option>
                    </select><br>

                    <label for="correoElectronico">Correo Electrónico:</label>
                    <input type="email" id="correoElectronico" name="correoElectronico" class="form-control" required><br>

                    <label for="direccion">Dirección:</label>
                    <input type="text" id="direccion" name="direccion" class="form-control" required><br>

                    <label for="costoConsulta">Costo de Consulta:</label>
                    <input type="text" id="costoConsulta" name="costoConsulta" class="form-control" required><br>
                </div>
            </div>

            <label for="historiaClinica">Historia Clínica:</label><br>
            <textarea id="historiaClinica" name="historiaClinica" class="form-control mb-3" rows="4" required></textarea>
            <div class="d-flex justify-content-center">
            <button type="submit" class="bg-primary mt-2 border border-0 fw-semibold rounded-2 p-2 w-25">Enviar</button>
            </div>
        </form>
    </div>
</body>
</html>
