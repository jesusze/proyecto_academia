@extends('layouts.Plantilla')

@section('content')
    <div class="slider">
        <div class="slide s1">
        </div>
        <div class="slide s2">
        </div>
        <div class="slide s3">
        </div>
    </div>

    <div class="button right">></div>
    <div class="button left"><</div>

    <ul class="pagination">
        <li></li>
        <li></li>
        <li></li>        
    </ul>

    <div class="linea"></div>
    <div class="title-text">
        GRUPO GAMAC
    </div>

    <hr>

    <div class="container-info">
        <div class="container-text-info">
            <div class="text-title">
                <h3>ACERCA DE LA TESIS</h3>
            </div>
            <div class="text-info">
                <p>
                    Uno de los mayores desafíos para los profesionales y estudiosos del Derecho es poder obtener los grados académicos 
                    (Maestría y Doctorado) y el Título Profesional con la sustentación de una investigación jurídica (tesis o tesina). 
                    Resulta un gran reto, por las dificultades que presenta la metodología de investigación: desde elegir el tema con 
                    la identificación de los problemas de investigación y el planteamiento de las hipótesis hasta definir los aspectos 
                    del diseño metodológico.
                </p>
            </div>
        </div>
        <div class="container-img-info">
            <div class="image-info">
                <img src="{{asset('img/graduados.jpeg')}}" alt="Imagen referente">
            </div>
        </div>
    </div>
    
@endsection