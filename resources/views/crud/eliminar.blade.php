<button class="btn btn-danger btn-sm" data-toggle="modal" data-target="#eliminar-{{ $persona->ci }}" >Eliminar</button>
<div id="eliminar-{{ $persona->ci }}" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="my-modal-title" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header modal-eliminar">
                <h5 class="modal-title" id="my-modal-title">Eliminar Persona</h5>
                <button class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="{{ route('persona.delete',['ci'=>$persona->ci]) }}" method="post">
                @csrf
                <div class="modal-body">

                    <p>Seguro que desea eliminar el registro ?</p>


                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-danger">Aceptar</button>
                    <button type="text" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                </div>
            </form>
        </div>
    </div>
</div>