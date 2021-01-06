<button class="btn btn-success btn-sm" data-toggle="modal" data-target="#actualizar-{{ $persona->ci }}" >Editar</button>
<div id="actualizar-{{ $persona->ci }}" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="my-modal-title" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header modal-actualizar">
                <h5 class="modal-title" id="my-modal-title">Actualizar Persona</h5>
                <button class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="{{ route('persona.update',['ci'=>$persona->ci]) }}" method="post">
                @csrf
                <div class="modal-body">

                    {{-- <div class="form-group"> --}}
                        {{-- <label for="ci">CI</label> --}}
                        {{-- <input hidden type="text" class="form-control" name="ci" value="{{ $persona->ci }}"> --}}
                    {{-- </div> --}}

                    <div class="form-group">
                        <label for="id_nombre">Nombre</label>
                        <input type="text" class="form-control" name="nombre" value="{{ $persona->nombre }}">
                    </div>

                    <div class="form-group">
                        <label for="id_paterno">Paterno</label>
                        <input type="text" class="form-control" name="apellidos" value="{{ $persona->apellidos }}">
                    </div>

                    <div class="form-group">
                        <label class="bmd-label-floating">Fecha de Nacimiento</label>
                        <input type="date" class="form-control" name="fecha_nac" value="{{ $persona->fecha_nac }}">
                    </div>

                    <div class="form-group p-3">
                        <label for="">Sexo :</label>
                        M<input type="radio" name="sexo" value="M">
                        F<input type="radio" name="sexo" value="F">
                    </div>


                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-success">Aceptar</button>
                    <button type="text" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
                </div>
            </form>
        </div>
    </div>
</div>