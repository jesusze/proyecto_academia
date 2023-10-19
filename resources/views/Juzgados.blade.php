@extends('layouts.PlantillaTaller')

@if ($section === 'juzgado')
    @section('title', 'TITULO JUZGADO')
    @section('text-content', 'Contenido del Juzgado')
    @section('img-content', asset('img/laywer.jpg'))

@elseif ($section === 'sala-superior')
    @section('title', 'TITULO SALA SUPERIOR')
    @section('text-content', 'Contenido de la Sala Superior')
    @section('img-content', asset('img/img2.jpeg'))
    
@elseif ($section === 'sala-suprema')
    @section('title', 'TITULO SALA SUPREMA')
    @section('text-content', 'Contenido de la Sala Suprema')
    @section('img-content', asset('img/img2.jpeg'))
@endif