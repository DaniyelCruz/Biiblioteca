
@extends ('plantilla')

@section('contenido')

@if (session()->has('confirmacion'))

{!! "<script> Swal.fire(
    'Correcto',
    'tu recuerdo llego al controlador',
    'succes'
)</script>"!!}

@endif<div class="container col-md-8">
<H1 class="text-center"> El entretenimiento sonoro se consolida: un 27% de personas han escuchado audiolibros en el último año </H1>
<img class="img-center" srcset="https://imagenes.20minutos.es/files/image_990_v3/uploads/imagenes/2022/09/13/auriculares-inalambricos.jpeg 414w,https://imagenes.20minutos.es/files/image_990_v3/uploads/imagenes/2022/09/13/auriculares-inalambricos.jpeg">
Las formas de entretenimiento clásicas están dejando paso a los nuevos formatos y, a la vez, aprendiendo a convivir. Y ejemplo de ello son los audiolibros, una manera distinta de poder disfrutar de la literatura cuando no se puede disfrutar de las páginas de una novela.

Lo cierto es que el crecimiento de los audiolibros es innegable y, tras dos años en España, Audible lo puede constatar. La marca de Amazon ha visto un crecimiento tanto en el número de usuarios como en el de títulos disponibles, ya sea pódcasts, audiolibros o ficciones sonoras.

El estudio Audible Compass ha constatado este 2022 que un 73% de los encuestados consume contenidos de audio en distintos géneros, lo cual supone un 18% más de que hace un año. Y, en concreto, un 27% asegura haber escuchado al menos un audiolibro en los últimos doce meses.
Aitana Sánchez-Gijón y Almudena Grandes.
Aitana Sánchez-Gijón narra el audiolibro de 'Todo va a mejorar', la novela póstuma de Almudena Grandes

Este mes de octubre se cumplen 25 años desde que Don Katz lanzara por primera vez Audible, y dos desde que se lanzara en España. Durante el último año, sus usuarios españoles escucharon una media de 1,4 millones de horas de audiolibros al mes, lo cual supone más de 20 millones de horas desde 2020.

Entre los títulos más escuchados están Por si las voces vuelven, de Ángel Martín; Sira, de María Dueñas; la saga Harry Potter, narrada por Leonor Watling; Sherlock Holmes, narrado por José Coronado; o la novela póstuma de Almudena Grandes, Todo va a mejorar, narrada en exclusiva para Audible por Aitana Sánchez-Gijón.

"Hay que destacar el crecimiento del catálogo, pues se ha doblado de los 6.700 títulos en español con los que lanzamos a los 14.000 que hay actualmente", declara Juan Baixeras, Country Manager de Audible en España e Italia.

La convivencia de la lectura clásica -ya sea en libros o e-books- con los audiolibros es el presente y el futuro: el 83% de los españoles que escuchan audiolibros ha leído libros en el último año.

</div>
@stop 