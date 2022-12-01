
@foreach($resultRec as $consulta)

<!-- Modal -->
<div class="modal fade" id="ModalEliminar{{$consulta->idRecuerdo}}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="ModalEliminar{{$consulta->idRecuerdo}}" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="staticBackdropLabel">Eliminar recuerdo</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      

      <div class="card text-center mb-5">
        <div class="display-7 card-header">
          Querido diario !! 
        </div>
        <div class="card-body">
            <form method="post" action="{{route('recuerdo.destroy', $consulta->idRecuerdo)}}">
                @csrf
                {!!method_field('put')!!}
                <div class="mb-3">
                  <label class="display-8 form-label">Titulo: </label>
                  <input type="text" class="form-control" name="txtTitulo" value="{{$consulta->titulo}}">
                    <!-- aqui otra opcion para visualizar los errores -->
                    <p class = "text-danger fst-italic"> {{ $errors -> first('txtTitulo') }} </p>
                </div>

                <div class="mb-3">
                  <label class="display-8 form-label">Recuerdo: </label>
                  <input type="text" class="form-control" name="txtRecuerdo" value="{{$consulta->recuerdo}}">
                  <p class = "text-danger fst-italic"> {{ $errors -> first('txtRecuerdo') }} </p>
                </div>
        </div>
        <div class="card-footer">
            <button type="submit" class="btn btn-primary">Eliminar recuerdo</button>
                <a  href={{route('recuerdo.index')}} class="btn btn-warning m-1">No eliminar recuerdo</a>
            </form>
        </div>
      </div>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Understood</button>
      </div>
    </div>
  </div>
</div>
@endforeach