<?php

namespace App\Http\Controllers;

use App\Models\Pacientes;
use Illuminate\Http\Request;

class PacientesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $paciente = Pacientes::all();
        return view('pacientes.index', ['pacientes'=>$paciente]);
        
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pacientes.crear');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'tipoDocumento' => ['required'],
            'numeroDocumento' => ['required'],
            'nombre' => ['required'],
            'apellido' => ['required'],
            'telefono' => ['required'],
            'sexo' => ['required'],
            'fechaNacimiento' => ['required'],
            'edad' => ['required'],
            'telefono' => ['required'],
            'tipoSangre' => ['required'],
            'correoElectronico' => 'required',
            'direccion' => ['required'],
            'historiaClinica' => ['required'],
            'costoConsulta' => ['required'],
        ]);
        Pacientes::create($request->all());
        return redirect()->route('pacientes.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $paciente = Pacientes::findOrFail($id);
        return view('pacientes.mostrar', compact('paciente'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $paciente = Pacientes::findOrFail($id);
        return view('pacientes.editar', compact('paciente'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'tipoDocumento' => 'required',
            'numeroDocumento' => 'required',
            'nombre' => 'required',
            'apellido' => 'required',
            'telefono' => 'required',
            'sexo' => 'required',
            'fechaNacimiento' => 'required',
            'edad' => 'required',
            'telefono' => 'required',
            'tipoSangre' => 'required',
            'correoElectronico' => 'required',
            'direccion' => 'required',
            'historiaClinica' => 'required',
            'costoConsulta' => 'required',
        ]);

        $paciente = Pacientes::findOrFail($id);
        $paciente->numeroDocumento = $request->numeroDocumento;
        $paciente->nombre = $request->nombre;
        $paciente->apellido = $request->apellido;
        $paciente->telefono = $request->telefono;
        $paciente->sexo = $request->sexo;
        $paciente->fechaNacimiento = $request->fechaNacimiento;
        $paciente->edad = $request->edad;
        $paciente->telefono = $request->telefono;
        $paciente->tipoSangre = $request->tipoSangre;
        $paciente->correoElectronico = $request->correoElectronico;
        $paciente->direccion = $request->direccion;
        $paciente->historiaClinica = $request->historiaClinica;
        $paciente->costoConsulta = $request->costoConsulta;
        $paciente->save();

        return redirect()->route('pacientes.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $paciente = Pacientes::findOrFail($id);
        $paciente-> delete();

        return redirect()->route('pacientes.index');
    }
}
