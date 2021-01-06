@extends('index')
@section('contenido')
    <div class="container">
        <div class="card pt-2">
            <div class="card-header">
                <h5 class="title text-center">CRUD LARAVEL</h5>
            </div>
            <div class="card-body">
                <div class="border btn-group pb-2">
                    @include('crud.insertar')
                    
                </div>
                <table class=" table table-bordered">
                    <thead>
                        <tr>
                            <th>CI</th>
                            <th>NOMBRE</th>
                            <th>APELLIDOS</th>
                            <th>SEXO</th>
                            <th>FECHA NACIMIENTO</th>
                            <th>OPCIONES</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($personas as $persona)                            
                        <tr>
                            <td>{{ $persona->ci }}</td>
                            <td>{{ $persona->nombre }}</td>
                            <td>{{ $persona->apellidos }}</td>
                            <td>{{ $persona->sexo }}</td>
                            <td>{{ $persona->fecha_nac }}</td>
                            <td>
                                @include('crud.actualizar')
                                @include('crud.eliminar')
                            </td>
                        </tr>
                        @endforeach

                    </tbody>
                </table>

            </div>
        </div>
    </div>
@endsection