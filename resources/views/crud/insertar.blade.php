<button class="btn btn-primary btn-sm" data-toggle="modal" data-target="#insertar" >Agregar</button>
<div id="insertar" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="my-modal-title" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header modal-insertar">
                
                <h5 class="modal-title" id="my-modal-title">Insertar Persona</h5>
                <button class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="{{ route('persona.store') }}" method="post">
                @csrf
                <div class="modal-body">

                    <div class="form-group">
                        <label for="ci">CI</label>
                        <input type="text" class="form-control" name="ci" >
                    </div>

                    <div class="form-group">
                        <label for="id_nombre">Nombre</label>
                        <input type="text" class="form-control" name="nombre">
                    </div>

                    <div class="form-group">
                        <label for="id_paterno">Paterno</label>
                        <input type="text" class="form-control" name="apellidos">
                    </div>

                    <div class="form-group">
                        <label class="bmd-label-floating">Fecha de Nacimiento</label>
                        <input type="date" class="form-control" name="fecha_nac">
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