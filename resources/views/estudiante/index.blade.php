@extends('layout')
@section('content')
    <div class="container shadow-lg p-3 mt-5 bg-body rounded">
        <h1 class="m-3"> Estudiantes Registrados</h1>
        <table class="table table-hover">
            <thead class="thead-dark">
            <tr>
                <td>id</td>
                <td>Nombre</td>
                <td>Apellidos</td>
                <td>correo</td>
                <td>Correo</td>
                <td>Telefono</td>
                <td>Genero</td>
                <th>&nbsp;</th>
            </tr>
            </thead>
            <tbody>
            @forelse($estudiantes as $estudiante)
                <tr>
                    <td>{{$estudiante->id}}</td>

                    <td>{{$estudiante->nombre}}</td>

                    <td>{{$estudiante->apellidos}}</td>

                    <td>{{$estudiante->correo)}}</td>


                    <td>{{$estudiante->telefono}}</td>


                    <td>{{$estudiante->genero}}</td>


                    <td class="d-flex justify-content-around">
                        <a class="btn btn-danger" href="javascript:void(0)" onclick="event.preventDefault();
                            document.getElementById('delete-estudiante-{{$estudiante->idestudiante}}').submit();">
                            Eliminar
                        </a>
                        <form id="delete-estudiante-{{$estudiante->idestudiante}}"
                              action="{{route('estudiantes.destroy',['estudiante'=>$estudiante->idestudiante])}}" method="POST"
                              style="display: none;">
                            @csrf
                            @method('DELETE')
                        </form>
                    </td>
                </tr>
            @empty
                <h1 class="m-4">Sin Registros</h1>
            @endforelse
            </tbody>
        </table>
    </div>

@endsection


