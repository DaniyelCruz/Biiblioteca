
@extends ('plantilla')

@section('contenido')



<div class="container col-md-8">
<H1 class="text-center"> Registrar </H1>


    @if($errors->any())
        @foreach($errors as $error)
            
        @endforeach
    @endif

    <div class="card">

        <div class="card-body">
        
        <form method="post" action="GuardarRecuerdo">
        @csrf
            <div class="mb-3">
                <label class="form-label">ISBN</label>
                <input type="number" class="form-control" id="ISBN" name="ISBN">
                <p class="text-danger fst-italic"> {{$errors->first('ISBN')}}</p>
            </div>
            
            <div class="mb-3">
                <label class="form-label">TITULO</label>
                <input type="text" class="form-control" id="TITULO" name="TITULO">
                <p class="text-danger fst-italic"> {{$errors->first('TITULO')}}</p>
            </div>
            
            <div class="mb-3">
                <label class="form-label">AUTOR</label>
                <input type="text" class="form-control" id="AUTOR" name="AUTOR">
                <p class="text-danger fst-italic"> {{$errors->first('AUTOR')}}</p>
            </div>

            <div class="mb-3">
                <label class="form-label">PAGINAS</label>
                <input type="number" class="form-control" id="PAGINAS" name="PAGINAS">
                <p class="text-danger fst-italic"> {{$errors->first('PAGINAS')}}</p>
            </div>

            <div class="mb-3">
                <label class="form-label">EDITORIAL</label>
                <input type="text" class="form-control" id="EDITORIAL" name="EDITORIAL">
                <p class="text-danger fst-italic"> {{$errors->first('EDITORIAL')}}</p>
            </div>
    
            <div class="mb-3">
                <label class="form-label">E-MAIL DE EDITORIAL</label>
                <input type="email" class="form-control" id="EMAIL" name="EMAIL">
                <p class="text-danger fst-italic"> {{$errors->first('EMAIL')}}</p>
            </div>

        </div>

        <div class="text-center" class="card-footer">

            <button type="submit" class="btn btn-succes m-1" >REGISTRAR</button>

        </form>

        </div>
    </div>
</div>
@stop 
