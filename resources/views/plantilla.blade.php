<!DOCTYPE>
<html lang="en">

<head>
  
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie-edge">

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
</head>

<body> 

<!--navbar-->
<nav class="navbar navbar-expand-lg bg-light">
  <div class="container-fluid">
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav">
        <a class="nav-link" href="Principal">Principal</a>
        <a class="nav-link" href="Registrar">Registrar libro</a>
      </div>
    </div>
  </div>
</nav>

<!--contenido-->
@yield('contenido')

<!--pie de pagina-->
<div class="alert alert-dark" role="alert">
  BIBLIOTECA ACETOILBIB, TODOS LOS DERECHOS RESERVADOS 27 OCUBRE 2022 
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
</body>
</html>

<script use App\Http\Controllers\ControladorRequests;></script>

