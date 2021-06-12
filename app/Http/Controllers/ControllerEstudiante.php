<?php


namespace App\Http\Controllers;

use App\Estudiante;
use App\Genero;
use App\Http\Requests\EstudiantePostRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ControllerEstudiante extends Controller
{
    public function index(Request $request)
    {

        $estudiantes = DB::table('estudiante')
            ->join('genero', 'estudiante.genero_idgenero','=', 'genero.idgenero')
            ->select('estudiante.*','genero.descripcion as genero' )->get();
        return view('estudiante.index', compact('estudiantes'));


    }

    public function create()
    {
        $generos = Genero::all();
        return view('estudiante.create',compact('generos'));
    }

    public function store(EstudiantePostRequest $request)
    {
        $data = $request->validated();
        $estudiante = Estudiante::create($data);
        return redirect()->route('estudiantes.index');
    }
    public function destroy(Request $request, Estudiante $estudiante)
    {
        $estudiante->delete();
        return redirect()->route('estudiantes.index');
    }

}

