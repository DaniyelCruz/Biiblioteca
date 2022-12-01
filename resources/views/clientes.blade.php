@extends('template')


@section('contenido')

@include('modalinsertar')
@include('modalactualizar')
@include('modaleliminar')
@if (session()->has('success'))
    {!! 
    "<script> Swal.fire(
      'Correcto!',
      'Tu recuerdo se actualizo correctamente!',
      'success'
    )</script> "
    !!}
@endif
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
        <a type="button" class="navbar-brand" data-bs-toggle="modal" data-bs-target="#ModalInsertar"aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">Insertar recuerdo</a>     
               
            
        </div>
    </nav>
@foreach($resultRec as $consulta)
@csrf


           
    <div class="container col-md-6">

        <div class="card text-center mt-5 mb-5">
            <div class="display-7 card-header">
                {{$consulta -> fecha }}
            </div>

            <div class="card-body">
                {{$consulta -> titulo}}
                {{$consulta -> recuerdo}}
            </div>

            <div class="card-footer">

            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#ModalActualizar{{$consulta->idRecuerdo}}">Editar</button>
            <button type="button" class="btn btn-secundary" data-bs-toggle="modal" data-bs-target="#ModalEliminar{{$consulta->idRecuerdo}}">Eliminar</button>


            </div>
        </div>
    </div>
    
@endforeach
@stop

